<?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
echo "'/tmp/'";

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $error = $_FILES["gambar"]["error"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $tmp_name = $_FILES["gambar"]["tmp_name"];
        $namaFileValid = $_FILES["gambar"]["name"];
        $extensiFile = ["jpg", "jpeg", "png"];
        if($error == 4){
            echo "<script>alert('Inputkan gambar yang benar')</script>";
        }else{
            $extensiFileValid = explode(".", $namaFileValid);
            $fgf = strtolower(end($extensiFileValid));
            if( !in_array($fgf, $extensiFile)){
                echo "<script>alert('Extensi gambar tidak benar')</script>";
            }

            if($ukuranFile >= 1000000){
                echo "<script>alert('Ukuran gambar terlalu besar')</script>";
            }
            move_uploaded_file($tmp_name, 'img/'.$namaFileValid);
            var_dump($fgf);
            // $result = mysqli_query($conn, "INSERT INTO admin VALUES (NULL, '$username', '$password', '$gambar')");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Gambar</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>