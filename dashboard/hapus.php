<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'cancel-booked.php';
        </script>";
} else {
    echo "<script>
                alert('Data gagal Dihapus');
                document.location.href = 'cancel-booked.php';
        </script>";
}
