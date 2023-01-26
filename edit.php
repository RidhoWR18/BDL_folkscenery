<!DOCTYPE html>
<?php
require_once "vendor/autoload.php";
$client = new MongoDB\Client;
$db = $client->selectDatabase('tes');
$coll = $db->selectCollection('coba');

$filter = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];
$tampil = $coll->find($filter);
					foreach($tampil as $key => $tmpl){
						$tampil = json_encode( [
                          'id' => (string) $tmpl['_id'],
						  'username' => $tmpl['username'],
						  'password' => $tmpl['password'],
						  'nama' => $tmpl['nama']
  						], true);
						?>
<form method="POST" action="">
    
    ID <input type="text" readonly value="<?php echo $tmpl['_id'] ?>"><br>
    USERNAME <input type="text" name="username" value="<?php echo $tmpl['username'] ?>"><br>
    PASSWORD <input type="text" name="password" value="<?php echo $tmpl['password'] ?>"><br>
    NAMA <input type="text" name="nama" value="<?php echo $tmpl['nama'] ?>"><br>

    <input type="submit" value="SIMPAN" name="submit">
</form>
<?php } ?>

<?php
if(isset($_POST['submit'])){
    $filter = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];
    
    $data = [
        'username' =>$_POST['username'],
        'password' =>$_POST['password'],
        'nama' =>$_POST['nama']
    ];

    $result = $coll->updateOne($filter, ['$set' => $data]);
    if($result->getModifiedCount()>0){
        echo "<script>window.location = 'dashboard.php';</script>";
    } else {
        echo "gagal";
    }
}

?>
</html>