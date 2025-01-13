<?php include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>record</title>
</head>
<body>
    <a href="form.php"> new record</a>
    <table border="2">
        <tr>
<th>id</th>
<th>username</th>
<th>email</th>
</tr>
<?php

$sql="SELECT id,name,email FROM user";
$result=$conn->query($sql);
while($row=$result->fetch(PDO::FETCH_ASSOC)){
    echo'<tr>';
    echo'<td>' .htmlspecialchars($row['id']) .'</td>';
    echo'<td>' .htmlspecialchars($row['name']) .'</td>';
    echo'<td>' .htmlspecialchars($row['email']) .'</td>';
    echo '<td><a href="update.php?id=' . htmlspecialchars($row['id']) . '">Edit</a> | <a href="delete.php?id=' . htmlspecialchars($row['id']) . '" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
    echo'</>tr';
}




?>
    </table>
</body>
</html>