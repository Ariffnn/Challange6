<?php
$nim = "";
$nama = "";
$jurusan = "";
$sudah_disubmit = false;

// Cek apakah form dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"] ?? "";
    $nama = $_POST["nama"] ?? "";
    $jurusan = $_POST["jurusan"] ?? "";
    
    $sudah_disubmit = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar - POST</title>
</head>
<body>
    <h1>Praktikum Form Post</h1>
    <hr>

    <!-- TABEL HASIL (Hanya muncul jika form sudah disubmit) -->
    <?php if ($sudah_disubmit): ?>
        <h3>Data yang Berhasil Disimpan:</h3>
        <table style="width: 100%; margin-bottom: 20px;">
            <tbody>
                <tr>
                    <th width="100" style="text-align: left;">NIM</th>
                    <td width="10">:</td>
                    <td><?php echo htmlspecialchars($nim); ?></td>
                </tr>
                <tr>
                    <th width="100" style="text-align: left;">NAMA</th>
                    <td width="10">:</td>
                    <td><?php echo htmlspecialchars($nama); ?></td>
                </tr>
                <tr>
                    <th width="100" style="text-align: left;">JURUSAN</th>
                    <td width="10">:</td>
                    <td><?php echo htmlspecialchars($jurusan); ?></td>
                </tr>
            </tbody>
        </table> 
        <hr>
    <?php endif; ?>
        
    <!-- FORM DATA -->
    <h2>Form Data (POST)</h2>
    <!-- Atribut method diubah menjadi post -->
    <form action="" method="post">
        <p style="margin: 0px;">NIM</p>
        <input type="text" name="nim" id="nim" value="<?php echo htmlspecialchars($nim); ?>">
        <br>

        <p style="margin: 0px;">NAMA</p>
        <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <br>

        <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI" <?php echo ($jurusan == "TI") ? "selected" : ""; ?>>TI</option>
            <option value="RSK" <?php echo ($jurusan == "RSK") ? "selected" : ""; ?>>RSK</option>
            <option value="BD" <?php echo ($jurusan == "BD") ? "selected" : ""; ?>>BD</option>
            <option value="DKV" <?php echo ($jurusan == "DKV") ? "selected" : ""; ?>>DKV</option>
        </select>
        <hr>
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>