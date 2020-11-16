<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
        </script>";
    header("location: cancel-booked.php");
    exit;
} else {
    echo "<script>
                alert('Data gagal Dihapus');
        </script>";
    header("location: cancel-booked.php");
    exit;
}
