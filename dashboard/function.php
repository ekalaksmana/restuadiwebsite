<?php

// koneksi database
$conn = mysqli_connect("localhost", "u9419554_restu-adi-web ", "restuadiweb", "u9419554_restu-adi-db");

// Function query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
