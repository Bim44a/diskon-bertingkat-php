<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informasi Buku</h1>

        <?php
        //Data buku
        $judul = "Laravel: From Beginner to Advanced";
        $pengarang = "Budi Raharjo";
        $penerbit = "Informatika";
        $tahun_terbit = 2023;
        $harga = 125000;
        $stok = 8;
        $isbn = "978-602-1234-56-7";


        $judul1 = "Mastering Database with MySQL";
        $kategori1 = "Database";
        $bahasa1 = "Inggris";
        $halaman1 = 315;
        $harga1 = 175000;
        $berat_buku1 = 400;
        $stok1 = 5;
        $isbn1 = "978-602-1234-56-22";


        $judul2 = "Seni Membuat Website Profesional";
        $kategori2 = "Programming";
        $bahasa2 = "Indonesia";
        $halaman2 = 250;
        $harga2 = 125000;
        $berat_buku2 = 310;
        $stok2 = 15;
        $isbn2 = "978-602-1234-56-44";


        $judul3 = "Database Optimization Techniques";
        $kategori3 = "Database";
        $bahasa3 = "Inggris";
        $halaman3 = 410;
        $harga3 = 150000;
        $berat_buku3 = 350;
        $stok3 = 7;
        $isbn3 = "978-602-1234-56-33";
        ?>

        <!-- Contoh buku praktikum -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><?php echo $judul; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Pengarang</th>
                        <td>: <?php echo $pengarang; ?></td>
                    </tr>

                    <tr>
                        <th>Penerbit</th>
                        <td>: <?php echo $penerbit; ?></td>
                    </tr>

                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: <?php echo $tahun_terbit; ?></td>
                    </tr>

                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn; ?></td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga, 0, ',', '.'); ?></td>
                    </tr>

                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- Buku pertama -->
        <div class="card mt-4">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0"><?php echo $judul1; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Kategori</th>
                        <td>:<span class="badge bg-danger"><?php echo $kategori1; ?></span></td>
                    </tr>

                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa1; ?></td>
                    </tr>

                    <tr>
                        <th>Halaman</th>
                        <td>: <?php echo $halaman1; ?> halaman</td>
                    </tr>

                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat_buku1; ?> gram</td>
                    </tr>

                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn1; ?></td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga1, 0, ',', '.'); ?></td>
                    </tr>

                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok1; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- Buku kedua -->
        <div class="card mt-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0"><?php echo $judul2; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Kategori</th>
                        <td>:<span class="badge bg-success"><?php echo $kategori2; ?></span></td>
                    </tr>

                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa2; ?></td>
                    </tr>

                    <tr>
                        <th>Halaman</th>
                        <td>: <?php echo $halaman2; ?> halaman</td>
                    </tr>

                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat_buku2; ?> gram</td>
                    </tr>

                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn2; ?></td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga2, 0, ',', '.'); ?></td>
                    </tr>

                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok2; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Buku ketiga -->
        <div class="card mt-4">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0"><?php echo $judul3; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Kategori</th>
                        <td>: <span class="badge bg-danger"><?php echo $kategori3; ?></span></td>
                    </tr>

                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa3; ?></td>
                    </tr>

                    <tr>
                        <th>Halaman</th>
                        <td>: <?php echo $halaman3; ?> halaman</td>
                    </tr>

                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat_buku3; ?> gram</td>
                    </tr>

                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn3; ?></td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga3, 0, ',', '.'); ?></td>
                    </tr>

                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok3; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>