<?php 
  $id = $_GET['id_anggota'];
  include('koneksi.php');

  $query = "select * from daftar_anggota where id_anggota='$id';";
  $result = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pembaruan</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>LOGO</h1>
        <nav class="navbar">
          <a href="index.html">Beranda</a>
          <a href="member.php">Daftar Member</a>
        </nav>
      </header>

      <div class="edit-form">
        <div class="edit-form-wrapper">
          <form action="action_edit.php?id_anggota=<?php echo $data['id_anggota']; ?>" method="post">
            <h1>Ubah Data Member</h1>
            <div class="input-1 input">
              <label for="input-nama">Nama</label>
              <input type="text" name="nama" id="input-nama" value= " <?php echo $data['nama']; ?>" />
            </div>
            <div class="input-2 input">
              <label for="input-alamat">Alamat</label>
              <input type="text" name="alamat" id="input-alamat" value="<?php echo $data['alamat']; ?>" />
            </div>
            <div class="input-3 input">
              <label for="input-usia">Usia</label>
              <input type="number" name="usia" id="input-usia" value="<?php echo $data['usia']; ?>" />
            </div>
            <div class="input-4 input">
              <label for="input-email">Email</label>
              <input type="email" name="email" id="input-email" value="<?php echo $data['email']; ?>" />
            </div>
            <button type="submit" id="submit-button">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
