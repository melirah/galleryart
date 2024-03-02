<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-warning"></i>
</button>

<div id="div1">

<!-- ini tampil -->
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

   
    </tr>
    <?php
}
    ?>
  </tbody>
</table>
</div>
<!-- penutup tampil -->
</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>