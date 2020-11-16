<?php

include "function.php";

$id = $_GET["id"];

$data = query("SELECT * FROM table_booking where id = $id")[0];


$nama_depan = $data["nama_depan"];
$nama_belakang = $data["nama_belakang"];
$email = $data['email'];
$wa_no = $data['wa_no'];
$kota = $data['kota'];
$kewarganegaraan = $data['kewarganegaraan'];
$service_select = $data['service_select'];
$trip_method = $data['services_select'];
$depature_date = $data['depature_date'];
$return_date = $data['return_date'];
$total_adult = $data['total_adult'];
$total_childern = $data['total_childern'];
$depature_from = $data['depature_from'];
$pickup_information = $data['pickup_information'];
$pickup_address = $data['pickup_address'];
$inquery = $data['inquery'];
$status_book = "Canceled";
$id_baru = $data['id'];



$query_update = "UPDATE table_booking SET
    nama_depan = '$nama_depan',
    nama_belakang = '$nama_belakang',
    email = '$email',
    wa_no = '$wa_no',
    kota = '$kota',
    kewarganegaraan = '$kewarganegaraan',
    service_select = '$service_select',
    trip_method = '$trip_method',
    depature_date = '$depature_date',
    return_date = '$return_date',
    total_adult = '$total_adult',
    total_childern = '$total_childern',
    depature_from = '$depature_from',
    pickup_information = '$pickup_information',
    pickup_address = '$pickup_address',
    inquery = '$inquery',
    status_book = '$status_book' WHERE id = $id_baru";

mysqli_query($conn, $query_update);


if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
                alert('Data Berhasil ditolak');
                
        </script>";
    header("location: cancel-booked.php");
    exit;
} else {
    echo "<script>
                alert('Data gagal ditolak');
        </script>";
    header("location: cancel-booked.php");
    exit;
}
