<?php
include "koneksi.php";
include "boot.php";
$id =$_GET['id'];
$ubah =$konek->query("select *from pengunjung where no='$id'");
$a = $ubah->fetch_array();
?>

<div class="card mt-3">
  <div class="card-header bg-warning">
    Edit
  </div>
<div class="card-body">
<form class="form-control mt-3 bg-white text-dark" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama']?>" required>

    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?= $a['alamat']?>" required>

    <label for="exampleInputEmail1" class="form-label">No telp</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp"value="<?= $a['no_telp']?>" required>

    <label for="exampleInputEmail1" class="form-label">tujuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan"value="<?= $a['tujuan']?>" required>

<div class="text-end">
<button type="submit" name="edit" class="btn btn-warning mt-3">Simpan</button>


  </div>
 </form>
</div>

<?php
if (isset($_POST['edit'])){


      $ubah = $konek->query("update pengunjung set nama='$_POST[nama]', alamat='$_POST[alamat]', no_telp='$_POST[no_telp]',tujuan='$_POST[tujuan]' where no='$id'");
     
?>
<script>
  document.location.href='tampil.php?id=berhasil';
</script>
<?php
        
      
    }
?>
