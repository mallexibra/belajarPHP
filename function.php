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
echo date("l, d-M-Y", time()+60*60*24*10) // Mencari 10 hari selanjutya;
?>