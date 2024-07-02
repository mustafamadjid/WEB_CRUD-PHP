<?php 
    

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];

    include("koneksi.php");

    $query = "insert into daftar_anggota (nama,alamat,usia,email) values('$nama','$alamat','$usia','$email');";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="popup-wrapper">
        <div class="popup-box">
          <?php 
          if(empty($nama) || empty($alamat) || empty($usia) || empty($email)){
            echo '<img src="remove.png"/>
                  <p>Pendaftaran Gagal, Lengkapi Data Terlebih Dahulu</p>
                  <a href="index.html">Kembali Ke Beranda</a>';
            
          }else{
            $result = mysqli_query($koneksi,$query);
            if($result){
              echo '<img src="verified.png"/>
                  <p>Pendaftaran Berhasil Dilakukan</p>
                  <a href="index.html">Kembali Ke Beranda</a>
                  <a href="member.php">Lihat Daftar Member</a>';
            }
          }
          
          ?>
          
        </div>
      </div>
    </div>
  </body>
</html>
