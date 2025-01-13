<?php
include('connection.php');



$sql = 'SELECT id, name, email FROM user WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$record) {
    echo"selected";
}
else{
    echo"not selected";
}
?>
