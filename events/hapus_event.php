<?php
session_start(); // Mulai sesi
include("../koneksi.php");


if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    $sql = "DELETE FROM events WHERE event_id=$event_id";
    $query = mysqli_query($db, $sql);

    
    if ($query) {
        $_SESSION['notifikasi'] = "Data event berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data event gagal dihapus!";
    }

    header('Location: index.php');
} else {
   
    die("Akses ditolak...");
}
?>