<?php
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$tujuan=$_POST['tujuan'];
if ($nama == "") {
  echo "maaf nama wajib di isi";
}else { 
$simpan=$konek->query("insert into pengunjung(nama,alamat,no_telp, tujuan) values('$nama','$alamat','$no_telp', '$tujuan')");
}
?>

<script>
  document.location.href = 'input.php?notif=berhasil';
</script>