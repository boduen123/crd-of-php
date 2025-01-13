<?php
$servername="localhost";
$username="root";
$password="";
$db="shop";

try{
    $conn= new pdo("mysql:host=$servername;dbname=$db",$username,$password);

    //pdo error exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected succefull";  
}
catch(PDOException $e){
    echo"failed connected" .$e->getMessage();

}



?>