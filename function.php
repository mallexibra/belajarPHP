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


?>