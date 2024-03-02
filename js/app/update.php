<?php
include "koneksi.php";
include "boot.php";
$id =$_GET['id'];
$ubah =$konek->query("select *from pengunjung where no='$id'");
$a = $ubah->fetch_array();
?>
<div class="container col-6">
<form class="form-control mt-3 bg-primary text-light" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama']?>">

    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?= $a['alamat']?>">

    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir" value="<?= $a['tanggal_lahir']?>">

    <label for="exampleInputEmail1" class="form-label">No telp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp"value="<?= $a['no_telp']?>">

    <label for="exampleInputEmail1" class="form-label">cita-cita</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cita_cita"value="<?= $a['cita_cita']?>">

<div class="text-end">
<button type="submit" class="btn btn-warning mt-3">Simpan</button>

  </div>
 </form>
</div>

<?php
if (!isset($_POST['edit'])){
}

      @$ubah = $konek->query("update pengunjung set nama='$_POST[nama]', alamat='$_POST[alamat]', tanggal_lahir='$_POST[tanggal_lahir]', no_telp='$_POST[no_telp]',cita_cita='$_POST[cita_cita]' where no='$id'");
      echo "data berhasil di ubah<a href='tampil.php'>kembali</a>";

?>
