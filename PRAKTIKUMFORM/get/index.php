<?php
$nim = $_GET["nim"] ?? "";
$nama = $_GET["nama"] ?? "";
$jurusan = $_GET["jurusan"] ?? "";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar</title>

</head>
<body>
    <H1>Praktikum From Get</H1>
    <hr>
    <table style="width: 100%;">
        <tbody>
        <tr>
            <th width="100" style="text-aligm: left;">NIM </th>
            <td width="10">:</td>
            <td>
                <?php echo $nim; ?>
            </td>
        </tr>
        <tr>
             <th width="100" style="text-aligm: left;">NAMA </th>
            <td width="10">:</td>
            <td>
                 <?php echo $nama; ?>
            </td>
        </tr>
        <tr>
             <th width="100" style="text-aligm: left;">JURUSAN </th>
            <td width="10">:</td>
            <td>
                 <?php echo $jurusan; ?>
            </td>
        </tr>
    </tbody>
</table>        
    <hr>
    <!-- form data -->
     <h2>form data</h2>
     <form action="/PRAKTIKUMFORM/get/index.php" method="get">
        <p style="margin: 0px;">NIM</p>
        <input style="number" name="nim" id="nim">
        <br>
        <p style="margin: 0px;">NAMA</p>
        <input style="number" name="nama" id="nama">
        <br>
        <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
</select>
<hr>
<button type="submit">Simpan Data</button>
</form>
<body>
</html>     
















</body>
</html>