<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form lowongan kerja php</title>
    <style type="text/css">
        label {
            width:100px;
            display:inline-block;
            width:290px;
            
        }
        
        #form{
            height: auto
            border-radius:20px;
            background: #0dab83;
box-shadow:  5px 5px 0px #0c9875,
             -2px -1px 0px #0ebe91;
            width:300px;
            
            
            
        }
        
        #forms{
            border-radius:30px;
            background: #0dab83;
box-shadow:  -5px 5px 0px #0c9875,
            -5px 0px #0ebe91;
        
            
            
            
        }
    </style>
</head>
<body style="background-color: darkseagreen">
  <h1 align='center'><font face = 'Courier New'>Grills:Registration Form </h1><br>
      <hr size='10' color = 'black'>
      <div id="forms"><h3><marquee direction="left" behavior="slide" scrollamount="20"> HARAP DATA DIISI YANG BENAR !</marquee></h3></div>
      <hr size='10' color = 'black'>
      <h2>Form Registrasi</h2><hr>
      <p>isi data dibawah ini :</p>
      <div id="form">
       <form action="hasilinputanlowongankerja.php" method="post">

    <legend><b>"Registration Form"</b></legend>
     <label>Nama :</label><input type="text" name="nama"><br>
     <label>Tempat Lahir :</label><input type="text" name="tempatlahir"><br>
     <label>Tanggal Lahir :</label><br>
           <!-- looping for tanggal -->
     <select name="tanggal">
     <option value="">tanggal</option>
     <?php
      for($tanggal=1;$tanggal<=31;$tanggal++){
        echo"<option value='tanggal($tanggal)'>$tanggal</option>";
      }
     ?>
     </select>
     <!-- looping foreach bulan -->
     <select name="bulan">
     <option value="">bulan</option>
     <?php
      $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
      foreach($bulan as $s){
        echo"<option value='bulan($s)'>$s</option>";
      }

     ?>
     
     </select>
     <!-- looping for tahun -->
     <select name="tahun">
     <option value="">tahun</option>
     <?php
     for($tahun=1950;$tahun<=2020;$tahun++){
       echo"<option value='tahun($tahun)'>$tahun</option>";
     }
     ?>
     </select><br>
    <!-- looping foreach agama -->
    <label>Agama</label>
    <select name="agama">
     <option value="">agama</option>
     <?php
      $agama = array("islam","katolik","konghucu","hindu","budha","kristen","yahudi");
      foreach($agama as $a){
        echo"<option value='agama($a)'>$a</option>";
      }

     ?>
    </select>
    
         
    <label>Nomor Handphone :</label><input type="text" name="Handphone"><br>
           
     
    <label>alamat :</label><textarea name="alamat" cols="30" rows="10"></textarea><br>
    <label>Jenis kelamin</label>
     <input type="radio" name="kelamin" value="laki-laki"> Laki-laki
     <input type="radio" name="kelamin" value="perempuan"> Perempuan
    <label>pendidikan terakhir</label>
     <select name="pendidikan">
     <option value="d3">D3</option>
     <option value="s1">S1</option>
     <option value="s2">S2</option>
     <option value="s3">S3</option>
     </select>
           <label>Program Studi/Jurusan :</label><input type="text" name="Jurusan"><br>
           <label>IPK Terakhir :</label><input type="text" name="IPK"><br>
           <label>Tahun Kelulusan :</label><input type="text" name="kelulusan"><br>
           <label>Email :</label><input type="text" name="Email"><br>
     <label>Pilih Pekerjaan</label>
     <select name="pekerjaan">
     <option value="internship">Internship</option>
     <option value="management development program">Management Development Program</option>
     <option value="management development program spesialist">Management Development Program Spesialist</option>
     <option value="staff">Staff</option>
     <option value="professional">Professional</option>
     <option value="supervisor trainee program">Supervisor Trainee Program</option>
     </select>
          <input type="submit" value="Proses">
     <input type="reset" value="Reset">
          </form>
      </div>
   
      <h3><a href="homepage.html">homepage</h3><br>
      <h3><a href="contact_page.html">contact_page</h3>
    
    
     
    
    
</body>
</html>