<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container container-member">
      <header class="header">
        <h1>LOGO</h1>
        <nav class="navbar">
          <a href="index.html">Beranda</a>
          <a href="member.php">Daftar Member</a>
        </nav>
      </header>
      <div class="content-data">
        <div class="content-wrapper">
          <div class="content-wrapper-2">
            <table>
              <tr>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Email</th>
                <th>Kelola</th>
              </tr>
              <tr>
                <?php 
                  include("koneksi.php");
                  $query = "select * from daftar_anggota";
                  $result = mysqli_query($koneksi,$query);  
                  while ($data = mysqli_fetch_assoc($result)) {
                    echo'
                        <tr>
                            <td>'.$data['id_anggota'].'</td>
                            <td>'.$data['nama'].'</td>
                            <td>'.$data['alamat'].'</td>
                            <td>'.$data['usia'].'</td>
                            <td>'.$data['email'].'</td>
                            <td>
                                    <a href="edit_page.php?id_anggota='.$data['id_anggota'].'"><button>Edit</button></a>
                                    <a href="action_hapus.php?id_anggota='.$data['id_anggota'].'"><button>Hapus</button></a>
                            </td>
                        </tr>
                        ';
                  }
                ?>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
