<?php
// ARRAY
// Array merupakan sebuah variabel yang dapat menampung banyak nilai
// Array boleh berisi banyak tipe data
// Array adalah pasangan antara Key dan Value;
// Key nya adalah index yang dimulai dari 0;
// Value nya adalah nilai dari tiap indexnya;
// ! Pembuatan Array Lama
// $array1 = array("Senin", "Selasa", "Rabu");
// ! Pembuatan Array Baru
// $array2 = ["Januari", "Februari", "Maret"];
// * Mencetak Array
// var_dump() / print_r()
// var_dump($array1);
// print_r($array2);
// Menampilkan1 elemen Array
// echo $array2[0];
// Menambahkan sebuah nilai pada array di bagian akhir;
// $array2[] = "April";
// print_r($array2);

// Pengulangan pada Array
// Bisa menggunakan for / foreach;
// for($i = 0; $i < count($array2); $i++){
//     echo $array2[$i];
// }

// foreach($array2 as $arr){
//     echo $arr;
// }

// Contoh Array didalam Array;
// $mahasiswa = [["Maulana", "Malik", "Ibrahim"], ["Anastasya", "Afianti", "Y.R"]];

// print_r($mahasiswa[1][0]);
// echo "<br>";
// foreach($mahasiswa as $mhs){
//     echo $mhs[0];
// }

// $mahasiswa = [
//     ["Maulana Malik Ibrahim", "09495805", "Teknik Informatika"],
//     ["Anastasya", "09809545", "Teknik Informatika"]
// ] // Tidak effective;

// Array Assosiative;
// Definisinya sama dengan Array Numerik, Kecuali key nya
// Key dari Array Assosiative dibuat sendiri oleh programmer
$mahasiswa = [
    [
    "nama" => "Maulana Malik Ibrahim",
    "nim" => "0347543058",
    "jurusan" => "Teknik Informatika"
    ],
    [
    "nama" => "Maulana Malik Ibrahim",
    "nim" => "0347543058",
    "jurusan" => "Teknik Informatika"
    ]
    ];
echo $mahasiswa[1]["nim"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY ASSOSIATIVE</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nim"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
