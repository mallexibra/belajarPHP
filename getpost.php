<?php

// Variable scope / Lingkup variabel
// $x = 10;
// echo $x;

// function tampilX(){
//     global $x; // Solusi 1
//     $x = 20; // solusi 2
//     echo $x; // Undefined, because variable $x not exist;
// }
// tampilX();

// VARIBLE GLOBALS
// Variable yang dimiliki oleh PHP
// $_COOKIE, $_ENV, $_FILES, $_GET, $_POST, $_REQUEST, $_SERVER, $_SESSION
// Bersifat layaknya Assosiative Array
// var_dump($_SERVER["SERVER_SOFTWARE"]);

$mahasiswa = [[
    "nama" => "Maulana Malik Ibrahim",
    "nim" => "362258302039",
    "email" => "mallexibra@gmail.com"],
    [
    "nama" => "Anastasya Afianti YS",
    "nim" => "362258302030",
    "email" => "afianastsya@gmail.com"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<?php // foreach ($mahasiswa as $mhs):?>
    <!-- <ul>
        <li><?php // $mhs["nama"]; ?></li>
        <li><?php //$mhs["nim"]; ?></li>
        <li><?php //$mhs["email"]; ?></li>
    </ul> -->
<?php // endforeach; ?>

<?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <a href="latihangetpost.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    </ul>
<?php endforeach; ?>

</body>
</html>