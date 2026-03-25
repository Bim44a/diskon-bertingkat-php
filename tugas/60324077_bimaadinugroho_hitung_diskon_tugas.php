<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perhitungan Diskon - Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Sistem Perhitungan Diskon Bertingkat</h1>

        <?php
        $nama_pembeli = "Budi Santoso";
        $judul_buku = "Laravel Advanced";
        $harga_satuan = 150000;
        $jumlah_beli = 4;
        $is_member = true;

        $subtotal = $harga_satuan * $jumlah_beli;

        if ($jumlah_beli >= 1 && $jumlah_beli <= 2) {
            $persentase_diskon = 0;
        } elseif ($jumlah_beli >= 3 && $jumlah_beli <= 5) {
            $persentase_diskon = 10;
        } elseif ($jumlah_beli >= 6 && $jumlah_beli <= 10) {
            $persentase_diskon = 15;
        } else {
            $persentase_diskon = 20;
        }

        $diskon = $subtotal * ($persentase_diskon / 100);

        $total_setelah_diskon1 = $subtotal - $diskon;

        $diskon_member = 0;
        if ($is_member) {
            $diskon_member = $total_setelah_diskon1 * 0.05;
        }

        $total_setelah_diskon = $total_setelah_diskon1 - $diskon_member;

        $ppn = $total_setelah_diskon * 0.11;

        $total_akhir = $total_setelah_diskon + $ppn;

        $total_hemat = $diskon + $diskon_member;
        ?>

        <div class="card shadow">
            <div class="card-header bg-success text-white">
                Hasil Perhitungan
            </div>
            <div class="card-body">

                <p><strong>Nama Pembeli:</strong> <?php echo $nama_pembeli; ?></p>
                <p><strong>Judul Buku:</strong> <?php echo $judul_buku; ?></p>
                <p><strong>Harga Satuan:</strong> Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></p>
                <p><strong>Jumlah:</strong> <?php echo $jumlah_beli; ?> buku</p>
                <p><strong>Status:</strong>
                    <?php if ($is_member): ?>
                        <span class="badge bg-primary">Member</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Non-member</span>
                    <?php endif; ?>
                </p>

                <hr>

                <h5>Perhitungan:</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Subtotal</td>
                        <td class="text-end">
                            Rp <?php echo number_format($subtotal, 0, ',', '.'); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Diskon (<?php echo $persentase_diskon; ?>%)</td>
                        <td class="text-end text-danger">
                            - Rp <?php echo number_format($diskon, 0, ',', '.'); ?>
                        </td>
                    </tr>

                    <?php if ($is_member): ?>
                        <tr>
                            <td>
                                Diskon Member (5%)
                            </td>
                            <td class="text-end text-danger">
                                - Rp <?php echo number_format($diskon_member, 0, ',', '.'); ?>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <tr>
                        <td>Total setelah diskon</td>
                        <td class="text-end">
                            Rp <?php echo number_format($total_setelah_diskon, 0, ',', '.'); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>PPN (11%)</td>
                        <td class="text-end">
                            Rp <?php echo number_format($ppn, 0, ',', '.'); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Total Akhir</strong></td>
                        <td class="text-end">
                            <strong>Rp <?php echo number_format($total_akhir, 0, ',', '.'); ?></strong>
                        </td>
                    </tr>

                    <tr>
                        <td>Total Hemat</td>
                        <td class="text-end">
                            Rp <?php echo number_format($total_hemat, 0, ',', '.'); ?>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>