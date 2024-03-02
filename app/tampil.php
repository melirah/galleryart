<?php

include "boot.php";
include "koneksi.php";

$searchTerm = isset($_GET['q']) ? $_GET['q'] : '';

// kolom yang ingin di cari
$tampil = "SELECT * FROM pengunjung WHERE 
            no LIKE '%$searchTerm%' OR
            nama LIKE '%$searchTerm%' OR
            alamat LIKE '%$searchTerm%' OR
            no_telp LIKE '%$searchTerm%' OR
            tujuan LIKE '%$searchTerm%' OR
            waktu LIKE '%$searchTerm%' order by no desc";

$result = $konek->query($tampil);
?>

<form class="d-flex mt-3" action="tampil.php" method="GET" target="konten">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<?php
if (isset($_GET['id'])=="berhasil"){

   ?>
   <div class="alert alert-info" role="alert">
        data berhasil diubah
   </div>

<?php
}
?>

<div class="card mt-4">
    <div class="card-header bg-warning">
        List Pengunjung
    </div>
    <div class="card-body">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama</th>
                    <th scope="col">alamat</th>
                    <th scope="col">no telp</th>
                    <th scope="col">tujuan</th>
                    <th scope="col">waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($s = $result->fetch_assoc()) {
                    $no++;
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['alamat'] ?></td>
                        <td><?= $s['no_telp'] ?></td>
                        <td><?= $s['tujuan'] ?></td>
                        <td><?= $s['waktu'] ?></td>
                        <td>

                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $s['no']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"><i class="bi bi-trash"></i>
                            </a>

                            <button class="btn btn-primary" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
