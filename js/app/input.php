<?php

include "boot.php";

?>
<div class="container col-6">
<form class="form-control mt-3 bg-primary text-light" action="prosesinput.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>

    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat">

    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir">

    <label for="exampleInputEmail1" class="form-label">No telp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp">

    <label for="exampleInputEmail1" class="form-label">cita-cita</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cita_cita">

<div class="text-end">
<button type="submit" class="btn btn-warning mt-3">Simpan</button>

  </div>

 </form>

</div>