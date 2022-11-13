<?php
    // Cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])){
    // Cek apakah username dan password sudah benar
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
    // Jika benar redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
}else{
    // Jika salah, beri pesan error
    $error = true;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <table>
    <form action="" method="post">
        <tr>
            <td>
                <label for="username">Username</label>
            </td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>
                <label for="password">Password</label>
            </td>
            <td>
                <input type="password" name="password" id="password">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </form>
    </table>
<?php if(isset($error)): ?>
    <p>Username atau Password anda salah!</p>
<?php endif; ?>
</body>
</html>