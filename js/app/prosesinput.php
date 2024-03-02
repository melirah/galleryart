<?php
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$no_telp=$_POST['no_telp'];
$cita_cita=$_POST['cita_cita'];
if ($nama == "") {
  echo "maaf nama wajib di isi";
}else { 
$simpan=$konek->query("insert into pengunjung(nama,alamat,tanggal_lahir,no_telp,cita_cita) values('$nama','$alamat','$tanggal_lahir','$no_telp','$cita_cita')");
}
?>

<script>
  document.location.href = 'input.php';
</script>