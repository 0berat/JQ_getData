<?php
if(isset($_POST["full_name"]) && isset($_POST["email"]) && isset($_POST["phone"])  ){

        try{
            $db = new PDO("mysql:host=localhost;dbname=beratt_db;charset=utf8","beratt_user","12Yazılım12+1");
        }catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
        $prepare = $db -> prepare("INSERT INTO rehber SET full_name = :full_name, email = :email, phone = :phone");
        $status = $prepare -> execute (array(
            "full_name" => $_POST["full_name"],
            "email" => $_POST["email"],
            "phone" => $_POST["phone"]

        ));
    if ($status){
        echo "kayıt başarılı";
    }else{
        echo "kayıt başarısız";
    }
}
else{

}