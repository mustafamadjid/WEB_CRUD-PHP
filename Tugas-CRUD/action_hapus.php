<?php 
include("koneksi.php");

$id = $_GET['id_anggota'];

$query = "delete from daftar_anggota where id_anggota='$id';";
$result = mysqli_query($koneksi,$query);

if($result){
    header("Location: index.html");
}


?>