<?php
    $host = 'localhost';
    $dbname = 'galeri';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        $db->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
    //Menggunakan database local
?>