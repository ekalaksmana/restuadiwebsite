<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
        echo "<script>
                alert('Customers Pulang Dengan Selamat!!!');
                
        </script>";
        header("http://restuadiwebsite.pekenkode.com/dashboard/confirm-reservasi.php");
} else {
        echo "<script>
                alert('Customers Pulang Dengan %#@$%!!!!');
        </script>";
        header("http://restuadiwebsite.pekenkode.com/dashboard/confirm-reservasi.php");
}
