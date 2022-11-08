<?php
// Date()
// * Digunakan untuk menampilkan tanggal dengan format tertentu;
//  ! "l" : Friday;
//  ! "D" : Fri;
//  ! "d" : 04;
// ! "M" : Nov;
// ! "Y" : 2022;
// ! "y" : 22;
    // echo date("l, D d-M-Y");

// Time
// UNIX Time / EPOCH TimeStamp
// echo time();
// echo date("l, d-M-Y", time()+60*60*24*10) // Mencari 10 hari selanjutya;
// echo date("l, d-M-Y", time()-60*60*24*10) // Mencari 10 hari sebelumnya;

// mktime
// Membuat detik waktu sendiri;
// mktime(0, 0, 0, 0, 0, 0);
// mktime(Jam, Menit, Detik, Bulan, Hari, Tahun);
// mktime(0, 0, 0, 04, 30, 2004);
// penggabungan date() dan mktime() untuk mencari waktu yang diinginkan sesuai waktu tertentu;
// echo date("l", mktime(0,0,0,8, 03, 2022));

// strtotime
// Membuat waktu menggunakan tanggal yang telah ditentukan sendiri
// echo date("l", strtotime("30 maret 2004"));

// strlen
// echo strlen("Hallo");
// strlen() akan mengembalikan sebuah nilai berupa angka dari panjangnya string yang di inputkan;

// strcmp
// echo strcmp("Hallo", "hallo semuanya");
// strcmp() akan membandingkan 2 buah string dan akan mengembalikan nilai berupa angka:
// 0 jika kedua string itu sama
// - jika string1 kurang dari string2
// + jika string1 lebih dari string2
// Jangan lupa kalo strcmp() ini juga case-sensitive;

// explode
// explode(separator, string, limit);
// separator(required): bagian mana yang akan di pecah/split.
// string(required): string yang mana yang akan dipecah, biasanya menggunakan variabel.
// limit(optional): limit dari panjang array
// $str = "one, two, three, four";
// print_r(explode(',',$str,5));

// htmlspecialchars()
// $str = "<b>Bold</b>";
// echo htmlspecialchars($str);
// htmlspecialchars() akan mengubah code html yang akan menjadi output sesuai sifat dari elemen tersebut menjadi sebuah string biasa;

// User-Defined Function
// Fungsi yang dibuat oleh user sendiri.
function salam($akhirnama = "ibrahim"){
    $coba = "Maulana malik $akhirnama";
    return $coba;
}
echo salam("Ganteng");
?>