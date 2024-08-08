<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    //juka hasilnya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
