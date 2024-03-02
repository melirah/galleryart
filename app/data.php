<?php
session_start();
$user = $_SESSION['user'];
if ($user == "") {
?>
  <script>
    window.location.href = '../index.php';
  </script>
<?php
} else {
  include "boot.php";
?>

<!-- navbar -->
<?php include "header.php"; ?>
<!-- akhir navbar -->
<!-- menu -->
<div class="container">
<div class="row">
  <div class="col-2 mt-4">
    <ul class="list-group">
      <a href="input.php" target="konten">
        <li class="list-group-item"><i class="bi bi-pencil-square"></i> Input </li>
      </a>
      <a href="tampil.php" target="konten">
        <li class="list-group-item"><i class="bi bi-journal-bookmark-fill"></i> List </li>
      </a>
      <a href="rekap.php" target="konten">
        <li class="list-group-item"><i class="bi bi-journal"></i> Rekap </li>
      </a>
    </ul>
  </div>
  <div class="col mt-2">
    <iframe src="" name="konten" frameborder="0" width="100%" height="800"></iframe>
  </div>
</div>
</div>
<!-- akhir menu -->
<!-- footer -->
<?php include "footer.php"; ?>
<!-- akhir footer -->

</body>
</html>
<?php
}
?>
