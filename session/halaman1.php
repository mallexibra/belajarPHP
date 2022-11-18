<?php
// SESSION memungkinkan kita untuk membuat variable global yang dapat digunakan di banyak halaman.
// Membuat variable session untuk semua halaman
    session_start();
    $_SESSION["name"] = "Maulana Malik Ibrahim";
    $_POST["nim"] = "ldskfkldh";
    echo $_SESSION["name"];
    echo $_POST["nim"];
?>