<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil inputan</title>

</head>
<body style="background-color: darkseagreen">
    <?php
        $nama = $_POST['nama'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggal'];
        $bulanlahir = $_POST['bulan'];
        $tahunlahir = $_POST['tahun'];
        $agama = $_POST['agama'];
        $handphone = $_POST['Handphone'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $pendidikan = $_POST['pendidikan'];
        $programstudi = $_POST['Jurusan'];
        $ipk = $_POST['IPK'];
        $kelulusan = $_POST['kelulusan'];
        $email= $_POST['Email'];
        $pilihanpekerjaan= $_POST['pekerjaan'];
    ?>
    <h2><font face = "Courier New">
    <table border =  "4" style="background-color: aqua">
        <tr>
        <th colspan="2">HASIL INPUTAN REGISTRATION FORM</th>
        </tr>
        
        <tr>
            <td>Nama</td>
            <td><?= $nama?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?= $tempatlahir?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?= $tanggallahir?>--<?=$bulanlahir?>--<?=$tahunlahir?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><?=$agama?></td>
        </tr>
        <tr>
            <td>Handphone</td>
            <td><?=$handphone?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?=$alamat?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?=$kelamin?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td><?=$pendidikan?></td>
        </tr>
        <tr>
            <td>Program Studi/Jurusan</td>
            <td><?=$programstudi?></td>
        </tr>
        <tr>
            <td>IPK</td>
            <td><?=$ipk?></td>
        </tr>
        <tr>
            <td>Tahun Kelulusan</td>
            <td><?=$kelulusan?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Pekerjaan Yang Dipilih</td>
            <td><?=$pilihanpekerjaan?></td>
        </tr>
    </table>
    <a href="index_daftar_kerja.php" target="blank">kembali ke halaman sebelumnya</a><br>
    <a href="/index.html">homepage</a><br>
    <a href="/contact_page/contact_page.html">contact_page</a>








</body>
</html>