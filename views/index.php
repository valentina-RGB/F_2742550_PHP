<?php
session_start();
if ($_SESSION['fullName'] == "") {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenidos <?php echo $_SESSION['fullName'] ?></h1>
    <a href="../destroy.php">salir</a>
</body>

</html>