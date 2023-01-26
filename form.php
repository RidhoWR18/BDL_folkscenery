<?php
include "koneksi/koneksidb.php";

if(isset($_GET['id_admin'])){
    $id_admin=$_GET['id_admin'];
}else{
    $id_admin="";
}
 
$sql=$conn->query("SELECT * FROM admin where id_admin='".$id_admin."' ");
$rs = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<a href="data.php">LIHAT DATA</a>
<form method="post" action="simpan.php">
    ID <input type="text" name="id_admin" value="<?php echo $rs['id_admin'] ?>" ><br>
    USERNAME <input type="text" name="username" value="<?php echo $rs['username'] ?>" ><br>
    PASSWORD <input type="password" name="password"><br>
    NAMA <input type="text" name="nama" value="<?php echo $rs['nama'] ?>" ><br>

    <input type="submit" value="SIMPAN">
</form>
</html>