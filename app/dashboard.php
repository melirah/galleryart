<!-- navbar -->
<?php include "header.php"; ?>
<!-- akhir navbar -->

<?php
include "boot.php";
$date = date('Y-m-d');
?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-6">
            <div class="text-center mt-3">
                <h4><?php echo $date; ?></h4>
            </div>
        </div>
    </div>

    <!-- dash hari pengunjung -->
    <div class="row justify-content-center"> 
        <div class="col-4 mt-2">
            <div class="card" style="width: 15rem;">
                <img src="../images/foto1.png" class="card-img-top" alt="..." width="150">
                <div class="card-body">
                    <p class="card-text"> Hari : </p>
                    <?php
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM pengunjung where waktu like '%$date%'");
                    $jumlah = $lihat->num_rows;
                    echo $jumlah;
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- akhir dash hari pengunjung -->

        <!-- dash bulan -->
        <div class="col-4 mt-2">
            <div class="card" style="width: 15rem;">
                <img src="../images/foto1.png" class="card-img-top" alt="..." width="150">
                <div class="card-body">
                    <p class="card-text"> Bulan : </p>
                    <?php
                    $date2=date('Y-m');
                    include "koneksi.php";
                    $lihat2 = $konek->query("SELECT waktu FROM pengunjung where waktu like '%$date2%'");
                    $jumlah2 = $lihat2->num_rows;
                    echo $jumlah2;
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- akhir dash bulan -->

        <!-- dash tahun -->
        <div class="col-4 mt-2">
            <div class="card" style="width: 15rem;">
                <img src="../images/foto1.png" class="card-img-top" alt="..." width="150">
                <div class="card-body">
                    <p class="card-text"> Tahun : </p>
                    <?php
                    $date3=date('Y');
                    include "koneksi.php";
                    $lihat3 = $konek->query("SELECT waktu FROM pengunjung where waktu like '%$date3%'");
                    $jumlah3 = $lihat3->num_rows;
                    echo $jumlah3;
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- akhir dash tahun -->
    </div>
</div>
