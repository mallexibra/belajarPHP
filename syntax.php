<?php
    // Belajar Syntax PHP

    // Standar Output (mencetak sesuatu)
    // echo, print
    // print_r (Khusus mencetak isi Array)
    // var_dump (Digunakan untuk debugging)

    // Penulisan Syntax PHP
    // 1. PHP didalam HTML
    // 2. HTML didalam PHP

    // Operator
    // Aritmatika
    // - + / * %

    // Penggabung String / concatenation / concat
    // .
    // echo "Maulana " . "Malik";

    // Assignment
    // =, -=, +=, /=, *=, .=
    
    // Perbandingan
    // <, >, <=, >=, ==, !=

    // Identitas
    // ===, !==

    // Logika
    // &&, ||, !

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- Contoh penulisan PHP didalam HTML -->
    <h1>Hello, <?= "Malik"; ?></h1>

    <!-- Contoh penulisan HTML didalam PHP -->
    <?php
        echo "<p>Ini adalah penulisan HTML didalam PHP</p>";
    ?>
</body>
</html>