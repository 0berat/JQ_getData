<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=beratt_db;charset=utf8","beratt_user","12Yazılım12+1");
}catch (PDOException $e){
    echo $e->getMessage();
    die();
}
$list = $db->query("SELECT * from  rehber")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);