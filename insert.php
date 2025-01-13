<?php
include('connection.php');
 $id=$_POST['id'];

 $name=$_POST['name'];
 $email=$_POST['email'];
 $sql="INSERT INTO user(id,name,email) values(:id,:name,:email)";

 $result=$conn->prepare( $sql);
 $result->bindParam(':id', $id);
  $result->bindParam(':name', $name);
  $result->bindParam(':email', $email);
  if($result->execute()){
    echo"inserted";
  }
  else{
    echo"failed";
  }
?>