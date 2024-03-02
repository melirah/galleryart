<?php
include "koneksi.php";

if(isset($_GET['id'])) {
  $id =$_GET ['id'];
  
  $hapus=$konek->query("delete from pengunjung where no ='$id'");
  if($hapus){
    echo "<script>
      alert('Data berhasil di hapus');
      window.location.href='tampil.php';
      </script>";
  }else{
    echo "<script>
    alert('Gagal menghapus data');
    window.location.href='tampil.php';
    </script>";
  }
}
?>




