<?php
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $event_id = $_POST['id'];
    $nama_event = $_POST['nama_event'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO events 
            (event_id, nama_event, lokasi, tanggal)
            VALUES ('$event_id', '$nama_event', '$lokasi', '$tanggal')";

    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
    }

    header('Location: index.php');
} else {

    die("Akses ditolak...");
}
?>