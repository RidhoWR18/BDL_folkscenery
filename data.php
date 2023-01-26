<?php
include "koneksi/koneksidb.php";
?>
<!DOCTYPE html>
<a href="tambah.php">TAMBAH DATA</a>
<a href="index.php">HOME</a>
<table width="600" border="1">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>NAMA</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>

<?php
$sql=$conn->query("SELECT * FROM admin");
while($rs=$sql->fetch_object()){
?>
    <tr>
        <td><?php echo $rs->id_admin; ?></td>
        <td><?php echo $rs->username; ?></td>
        <td><?php echo $rs->password; ?></td>
        <td><?php echo $rs->nama; ?></td>
        <td><a href="form.php?id_admin=<?php echo $rs->id_admin; ?>">EDIT DATA</a></td>
        <td><a href="hapus.php?id_admin=<?php echo $rs->id_admin; ?>">HAPUS DATA</a></td>
    </tr>
<?php
}
?>
</table>
</html>