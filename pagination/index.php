<?php
require "functions.php";
    // Connection to database family
    $conn = mysqli_connect("localhost", "root", "", "family");
    // Query Table
    // $result = mysqli_query($conn, "SELECT * FROM people");

    // pagination;
    $jumlahDataPerhalaman = 3;
    $jumlahData = count(query($conn, "SELECT * FROM people"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
    // methode membulatkan angka ada 3:
    // 1. round() : membulatkan ke angka terdekat (1.5 akan dibulatkan ke 2);
    // 2. floor() : lantai, dibulatkan ke bawah apapun itu;
    // 3. ceil() : langit, dibulatkan ke atas apapun itu;
    $halamanAktif = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

    $xy = query($conn, "SELECT * FROM people LIMIT $awalData, $jumlahDataPerhalaman");
    // var_dump($xy);

    if(isset($_POST["cari"])){
        $keyword = $_POST["keyword"];
        $result = mysqli_query($conn, "SELECT * FROM people WHERE name LIKE '%$keyword%' OR email LIKE '%$keyword%'");
    }
    // Fetch Data
    // Method fetch:
    // mysqli_fetch_array(); // Return array numerik and associative
    // mysqli_fetch_row(); // Return array numerik
    // mysqli_fetch_assoc(); // Return array associative
    // mysqli_fetch_object(); // Return object
    
    // var_dump($people);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>TABLE FAMILY</h1>
    <br>
    <form action="" method="post">
        <input type="tel" name="keyword" id="keyword" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if($halamanAktif > 1): ?>
    <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif; ?>
        <?php for($i= 1; $i<=$jumlahHalaman; $i++): ?>
            <?php if($i == $halamanAktif): ?>
                <a href="?halaman=<?php echo $i; ?>" style="color: red;">
            <?= $i; ?></a>
            <?php else: ?>
                <a href="?halaman=<?php echo $i; ?>">
            <?= $i; ?>
            </a>
            <?php endif; ?>
        <?php endfor; ?>
    <?php if($halamanAktif < $jumlahHalaman): ?>
    <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif; ?>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>AKSI</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($xy as $person): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $person["name"]; ?></td>
            <td><?= $person["email"]; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $person["id"]; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $person["id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>