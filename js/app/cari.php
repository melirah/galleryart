<?php

include "boot.php";
include "koneksi.php";

if (isset($_GET['query'])){
    $search_query = $_GET['query'];
    $result = $konek->query("SELECT * FROM pengunjung WHERE nama LIKE '%$search_query%'");

    // search result
    echo "<h2>Search Result for: " . htmlspecialchars($search_query). "</h2>";
    echo "<table class='table'>";
    echo "<th>no</th>";
    echo "<th>nama</th>";
    echo "<th>alamat</th>";
    echo "<th>tanggal_lahir</th>";
    echo "<th>no_telp</th>";
    echo "<th>cita_cita</th>";

    $no = 0;
    while ($row = $result->fetch_assoc()){
        $no++;
        echo "<tr>";
        echo "<th scope='row'>$no</th>";
        echo "<td>{$row}['nama']}></td>";
        echo "<td>{$row}['alamat']}></td>";
        echo "<td>{$row}['tanggal_lahir']}></td>";
        echo "<td>{$row}['no_telp']}></td>";
        echo "<td>{$row}['cita_cita']}></td>";
    }
}

// close database
$konek->close();
?>