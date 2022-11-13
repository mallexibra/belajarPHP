<?php
    if(!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["email"])){
        echo '<script>window.location="getpost.php"</script>';
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>NIM: <?= $_GET["nim"]; ?></li>
        <li>Email: <?= $_GET["email"]; ?></li>
    </ul>
</body>
</html>