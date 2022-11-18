<?php
    $conn = mysqli_connect("localhost", "root", "", "family");
    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $query = mysqli_query($conn, "INSERT INTO people VALUES(NULL, '$nama', '$email')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <button type="submit" name="submit">Tambah data</button>
    </form>
</body>
</html>