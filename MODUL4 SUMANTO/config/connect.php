<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "modul4";

// 

$conn = mysqli_connect ($host, $user, $pass, $dbname);

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

if ($conn->connect_error) {
    die( "Koneksi Gagal: " . $conn->connect_error);
}


// 
?>