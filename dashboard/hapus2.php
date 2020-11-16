<?php

include 'function.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
        echo "<script>
                alert('Customers Pulang Dengan Selamat!!!');
                
        </script>";
} else {
        echo "<script>
                alert('Customers Pulang Dengan %#@$%!!!!');
                document.location.href = 'confirm-reservasi.php';
        </script>";
}
