<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
        echo "<script>
                alert('Customers Pulang Dengan Selamat!!!');
                
        </script>";
        header("location: confirm-reservasi.php");
        exit;
} else {
        echo "<script>
                alert('Customers Pulang Dengan %#@$%!!!!');
        </script>";
        header("location: confirm-reservasi.php");
        exit;
}
