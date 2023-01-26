<?php
include "koneksi/koneksidb.php";
$sql=$conn->query("SELECT * FROM admin WHERE id_admin='".$_POST['id_admin']."' ");
$jml=$sql->num_rows;
if($jml > 0){
    $sql=$conn->query("UPDATE admin SET username='".$_POST['username']."', password='".$_POST['password']."',
    nama='".$_POST['nama']."' WHERE id_admin='".$_POST['id_admin']."' ");
}else{
    $sql=$conn->query("INSERT INTO admin (id_admin, username, password, nama) VALUES
    ('".$_POST['id_admin']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['nama']."') ");
}
header("location:data.php");
?>

</I>