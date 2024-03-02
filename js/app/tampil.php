<?php

include "boot.php";
include "koneksi.php";

$searchTerm= isset ($_GET['q']) ? $_GET['q'] : '';

$tampil = "SELECT * FROM pengunjung WHERE nama LIKE '%$searchTerm%'";
$result = $konek->query ($tampil)
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">tanggal lahir</th>
      <th scope="col">no telp</th>
      <th scope="col">cita cita</th>
      <th scope="col">waktu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($s= $result->fetch_assoc()) {
      @$no++;
    ?>
        <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?=$s['nama'] ?></td>
            <td><?=$s['alamat']?></td>
            <td><?=$s['tanggal_lahir'] ?></td>
            <td><?=$s['no_telp'] ?></td>
            <td><?=$s['cita_cita'] ?></td>
            <td><?=$s['waktu'] ?></td>
            <td><button class ="btn btn-danger" onclick="document.location.href='hapus.php?id=<?= $s['no']?>'">
            <i class="bi bi-trash"></i></button></td>
            <td><button class ="btn btn-primary" onclick="document.location.href='update.php?id=<?= $s['no']?>'">
            <i class="bi bi-pencil-square"></i></button></td>

   
    </tr>
    <?php
}

    ?>
  </tbody>
</table>
</div>