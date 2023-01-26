<?php
require_once "vendor/autoload.php";
$client = new MongoDB\Client;
$db = $client->selectDatabase('tes');
$coll = $db->selectCollection('coba');

if(isset($_GET['action']) && $_GET['action']  == 'delete'){
    $filter = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];
    $del = $coll->findOne($filter);
    if(!$del){
        echo "";
    }

    $result = $coll->deleteOne($filter);
    if($result->getDeletedCount()>0){
        header("location: dashboard.php");
    } else {
        echo "";
    }
}
?>