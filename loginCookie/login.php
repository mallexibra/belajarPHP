<?php
session_start(); // Jangan lupa session start;
    $conn = mysqli_connect("localhost", "root", "", "login");
    if(isset($_COOKIE["id"])){
        $id = $_COOKIE["id"];
        $result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
        $hasil = mysqli_fetch_assoc($result);
        if($_COOKIE["key"] == hash("sha256", $hasil["username"])){
            $_SESSION["login"] = true;
        }
    }

    if(isset($_SESSION["login"])){
        header("Location: index.php");
    }

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
        $hasil = mysqli_fetch_assoc($result);
                if(isset($_POST["remember"])){
                    setcookie('id', $hasil["id"], time()+60);
                    setcookie("key", hash("sha256", $hasil["username"]));
                    $_SESSION["login"] = true;
                    header("Location: index.php");
                    exit;
                }
                    $_SESSION["login"] = true;
                    header("Location: index.php");
        }
        echo $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li><button type="submit" name="submit">login</button></li>
        </ul>
    </form>
</body>
</html>