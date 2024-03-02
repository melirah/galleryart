<?php
session_start();
$user = $_SESSION['user'];
if ($user == "") {
?>
  <script>
    document.location = '../index.php';
  </script>
<?php
} else {
  include"boot.php";
?>

<!-- navbar -->

</head>
  <body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Meli Rahmawati</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled active text-light" aria-current="page" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="tampil.php" method="GET" target= "konten">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </form>
    </div>
  </div>
</nav>

<!-- akhir navbar-->

<!-- menu -->
<div class="row">
    <div class="col-3">
<ul class="list-group">
    <a href="input.php" target="konten"
        <li class="list-group-item">Biodata Anda</li>
    </a>
    <a href="tampil.php" target="konten">
        <li class="list-group-item">Biodata</li>
    </a>
    <a href="rekap.php" target="konten">
        <li class="list-group-item">Rekap</li>
    </a>
    <a href="logout.php">
        <li class="list-group-item">Logout</li>
    </a>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
</ul>

</div>

<div class="col mt-2">
    <iframe src ="" name="konten" frameborder="0" width="100%" height="800"></iframe>
</div>
</div>
</div>

    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
?>
