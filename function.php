<?php

// koneksi database
require "connection.php";

// Function query
function query($query)
{
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows= $row;
    }

    return $rows;
}