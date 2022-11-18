<?php
    $conn = mysqli_connect("localhost", "root", "", "family");
    $id = $_GET["id"];
    $query = mysqli_query($conn, "DELETE from people WHERE id='$id'");
    header("Location: index.php");
?>