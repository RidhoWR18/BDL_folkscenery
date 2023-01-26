<?php
include "koneksi/koneksidb.php";
$sql=$conn->query("DELETE FROM admin WHERE id_admin='".$_GET['id_admin']."' ");

header("location:data.php");
?>