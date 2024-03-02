<?php

include "boot.php";

?>
<div class="card mt-3">
  <div class="card-header bg-warning">
     Input Pengunjung
  </div>
<div class="card-body">
<form class="form-control mt-3 bg-white text-dark" action="prosesinput.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>

    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" required>

    <label for="exampleInputEmail1" class="form-label">No telp</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp" required>

    <label for="exampleInputEmail1" class="form-label">Tujuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan" required>

<div class="text-end">
<button type="submit" class="btn btn-warning mt-3">Simpan</button>
  </div>
 </form>
</div>

<?php
if (isset($_GET['notif'])=='Berhasil'){
  ?>
  <div class="alert alert-success" role="alert">
    Input Data Berhasil
</div>
<?php
}
?>