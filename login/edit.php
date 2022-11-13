<?php
    $conn = mysqli_connect("localhost", "root", "", "family");
    $id = $_GET["id"];
    if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = mysqli_query($conn, "UPDATE people SET name='$name', email='$email' WHERE id = '$id'");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="name" id="nama">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>