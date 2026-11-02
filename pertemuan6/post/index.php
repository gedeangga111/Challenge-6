<?php
$nim = "";
$nama = "";
$jurusan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = $_POST['nim'] ?? "";
    $nama = $_POST['nama'] ?? "";
    $jurusan = $_POST['jurusan'] ?? "";
 }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scales=1.0">
        <title>From Get</title>
    </head>
    <body>
        <h1>Praktikum From Get</h1>
        <tr>
        <table style="widht: 100%;">
            <tbody>
                 <th width="100" style="text-align: left;">NIM</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nim; ?>
                </td>
            </tr>
            <tr>
                <th width="100" style="text-align: left;">NAMA</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nama; ?>
                </td>
            </tr>
            <tr>
                <th width="100" style="text-align: left;">JURUSAN</th>
                <td width="10">:</td>
                <td>
                    <?php echo $jurusan; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    
    
    <h2>From Data</h2>
    <form action="/pertemuan6/POST/index.php" method="POST">
        <p style="margin: 0px;">NIM</p>
        <input type="number" name="nim" id="nim">
        <hr>
        
        <p style="margin: 0px;">Nama</p>
        <input type="text" name="nama" id="nama">
        <hr>

        <p style="margin: 0px;">Jurusan</p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI">TI</option>
            <option value="SI">SI</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
        </select>
        <hr>

        <button type="submit">Simpan Data</button>
    <body>
    </html>