
<?php
include('connection.php');

$id = $_GET['id'];

$sql = 'DELETE FROM user WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo"data deleted";
} else {
    echo 'Failed to delete record.';
}
?>
