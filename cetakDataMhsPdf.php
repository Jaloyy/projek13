<?php
require __DIR__ . '/fpdf186/fpdf.php';
require 'koneksi.php';

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'LAPORAN DATA MAHASISWA', 0, 1, 'C');
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 5, 'Universitas - Sistem Informasi Akademik', 0, 1, 'C');
        $this->Ln(5);
    }
    
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . ' | Dicetak pada: ' . date('d-m-Y H:i:s'), 0, 0, 'C');
    }
}

$sql = "SELECT * FROM mhs ORDER BY id ASC";
$result = mysqli_query($koneksi, $sql);

$pdf = new PDF('L', 'mm', 'A4'); // Landscape orientation
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 9);

// Header tabel
$pdf->SetFillColor(52, 152, 219);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(41, 128, 185);
$pdf->SetLineWidth(0.3);

$pdf->Cell(10, 8, 'No', 1, 0, 'C', true);
$pdf->Cell(25, 8, 'NIM', 1, 0, 'C', true);
$pdf->Cell(40, 8, 'Nama', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Tempat Lahir', 1, 0, 'C', true);
$pdf->Cell(25, 8, 'Tgl Lahir', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Kota', 1, 0, 'C', true);
$pdf->Cell(15, 8, 'JK', 1, 0, 'C', true);
$pdf->Cell(20, 8, 'Status', 1, 0, 'C', true);
$pdf->Cell(50, 8, 'Email', 1, 1, 'C', true);

// Data tabel
$pdf->SetFont('Arial', '', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);
$fill = false;
$no = 1;

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(10, 7, $no, 1, 0, 'C', $fill);
    $pdf->Cell(25, 7, $row['nim'], 1, 0, 'C', $fill);
    $pdf->Cell(40, 7, substr($row['nama'], 0, 25), 1, 0, 'L', $fill);
    $pdf->Cell(30, 7, substr($row['tempatLahir'], 0, 20), 1, 0, 'L', $fill);
    $pdf->Cell(25, 7, date('d-m-Y', strtotime($row['tanggalLahir'])), 1, 0, 'C', $fill);
    $pdf->Cell(30, 7, $row['kota'], 1, 0, 'L', $fill);
    $pdf->Cell(15, 7, $row['jenisKelamin'], 1, 0, 'C', $fill);
    $pdf->Cell(20, 7, $row['statusKeluarga'], 1, 0, 'C', $fill);
    $pdf->Cell(50, 7, substr($row['email'], 0, 30), 1, 1, 'L', $fill);
    
    $fill = !$fill;
    $no++;
}

$pdf->Output('I', 'Laporan_Mahasiswa_' . date('Y-m-d') . '.pdf');
?>