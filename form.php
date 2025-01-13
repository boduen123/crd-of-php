<?php
include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create record</title>
</head>
<body>
    <h1>create new record</h1>
    <form action="insert.php" method="post">

    <label for="id">id</label>
    <input type="text" id="id" name="id" required><br><br>

    <label for="name">username</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="id">email</label>
    <input type="email" id="email" name="email" required> <br><br><br>

    <input type="submit" value="create">
    </form>
</body>
</html>