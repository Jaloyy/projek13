<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Mahasiswa</h2>
        <form action="simpanDataMhs.php" method="POST">
            
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" id="tempatLahir" name="tempatLahir" required>
            </div>

            <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir" required>
            </div>

            <div class="form-group">
                <label for="jmlSaudara">Jumlah Saudara</label>
                <input type="number" id="jmlSaudara" name="jmlSaudara" min="0" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>

            <div class="form-group">
                <label for="kota">Kota</label>
                <select id="kota" name="kota" required>
                    <option value="">-- Pilih Kota --</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Solo">Solo</option>
                    <option value="Brebes">Brebes</option>
                    <option value="Kudus">Kudus</option>
                    <option value="Demak">Demak</option>
                    <option value="Salatiga">Salatiga</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="laki" name="jk" value="L" required>
                        <label for="laki">Laki-laki</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="perempuan" name="jk" value="P" required>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Status Keluarga</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="kawin" name="statusKeluarga" value="K" required>
                        <label for="kawin">Kawin</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="belum" name="statusKeluarga" value="B" required>
                        <label for="belum">Belum Kawin</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Hobi</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
                        <label for="membaca">Membaca</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
                        <label for="olahraga">Olahraga</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="musik" name="hobi[]" value="Musik">
                        <label for="musik">Musik</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="traveling" name="hobi[]" value="Traveling">
                        <label for="traveling">Traveling</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>