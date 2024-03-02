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

<!-- landing page -->
<section id="Tentang">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center">Gallery Art</h1>
      </div>
    </div>
  </div>
</section>
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h2 class="text-center"><marquee>Selamat datang di Gallery Art</marquee></h2>
        <p class="text-center"><i>Gallery Art</i> merupakan tempat di mana Anda dapat menikmati berbagai karya seni yang indah. Galeri seni memainkan peran penting dalam mendukung dan mempromosikan seniman, memfasilitasi pertukaran budaya, serta memperluas apresiasi terhadap seni di masyarakat. Mereka juga menjadi titik fokus bagi komunitas seni lokal dan global dalam membangun dialog dan menghargai keindahan serta keberagaman dalam ekspresi manusia.</p>
      </div>
    </div>
  </div>
</section>
<section id="menu-favorit">
  <div class="container">
    <div class="row">
      <div class="col-3 text-center">
        <img src="../images/1.jpeg" alt="Gallery" width="95%">
        <p>Gallery</p>
      </div>
      <div class="col-3 text-center">
        <img src="../images/2.jpeg" alt="Gallery" width="95%">
        <p>Gallery</p>
      </div>
      <div class="col-3 text-center">
        <img src="../images/3.jpeg" alt="Gallery" width="95%">
        <p>Gallery</p>
      </div>
      <div class="col-3 text-center">
        <img src="../images/4.jpeg" alt="Gallery" width="95%">
        <p>Gallery</p>
      </div>
    </div>
  </div>
</section>
<!-- akhir landing page -->
<!-- footer -->
<?php include "footer.php"; ?>
<!-- akhir footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>
