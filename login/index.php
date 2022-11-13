<?php
    // Connection to database family
    $conn = mysqli_connect("localhost", "root", "", "family");
    // Query Table
    $result = mysqli_query($conn, "SELECT * FROM people");
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
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>AKSI</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($person = mysqli_fetch_assoc($result)): ?>
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
        <?php endwhile; ?>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>