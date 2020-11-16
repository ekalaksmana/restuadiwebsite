<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
        </script>";
    header("http://restuadiwebsite.pekenkode.com/dashboard/cancel-booked.php");
} else {
    echo "<script>
                alert('Data gagal Dihapus');
        </script>";
    header("http://restuadiwebsite.pekenkode.com/dashboard/cancel-booked.php");
}
