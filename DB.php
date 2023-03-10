<?php
//$dbName = "id15106176_loginfix";
//$user = "id15106176_hyupai";
//$pwd = "][)F)=c>7!|G+}|#";
//$host = "localhost";
//conn = new PDO('mysql:dbname='//.$dbName.';host='.$host, $user//, $pwd);
//api url filter
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "b9d750177742e4", "1b89c436", "heroku_e8390792d8f98c7");
if($conn->connect_error != null){
    die($conn->connect_error);
}
