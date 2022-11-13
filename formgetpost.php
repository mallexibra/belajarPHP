<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <!-- <form action="darigetpost.php" method="get">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <button type="submit" name="submit">Submit</button>
    </form> -->
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST["submit"])){
            header("Location: darigetpost.php");
            exit;
        }
    ?>
</body>
</html>