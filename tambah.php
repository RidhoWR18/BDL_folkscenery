<!DOCTYPE html>
<a href="dashboard.php">LIHAT DATA</a>
<form method="post" action="">
    
    ID <input type="text" name="id_admin" hidden><br>
    USERNAME <input type="text" name="username"><br>
    PASSWORD <input type="password" name="password"><br>
    NAMA <input type="text" name="nama"><br>

    <input type="submit" value="SIMPAN" name="submit">
</form>

<?php

require_once "vendor/autoload.php";
$client = new MongoDB\Client;
$db = $client->selectDatabase('tes');
$coll = $db->selectCollection('coba');

if(isset($_POST['submit'])){
    $data = [
        'username' =>$_POST['username'],
        'password' =>$_POST['password'],
        'nama' =>$_POST['nama']
    ];
    $result = $coll->insertOne($data);
    if($result->getInsertedCount()>0){
        header("location: dashboard.php");
    } else {
        echo "";
    }
}

?>
</html>