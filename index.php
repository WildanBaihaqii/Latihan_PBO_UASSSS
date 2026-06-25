<?php
// 1. Hubungkan koneksi database dan class OOP
require_once 'src/Koneksi.php';
require_once 'class/RentalMobil.php';
require_once 'class/RentalMotor.php';
require_once 'class/RentalSepedaListrik.php';

// 2. Ambil data dalam bentuk objek langsung dari fungsi statis masing-masing class
$daftarMobil         = RentalMobil::getDaftarMobil($conn);
$daftarMotor         = RentalMotor::getDaftarMotor($conn);
$daftarSepedaListrik = RentalSepedaListrik::getDaftarSepedaListrik($conn);

// 3. Gabungkan ke dalam satu array untuk mempermudah looping di tabel HTML
$daftarKendaraan = [
    'Mobil'          => $daftarMobil,
    'Motor'          => $daftarMotor,
    'Sepeda Listrik' => $daftarSepedaListrik
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Rental Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">

    <h2 class="text-center mb-4">Daftar Transaksi Rental</h2>

    <?php foreach ($daftarKendaraan as $kategori => $listKendaraan): ?>
        <h4 class="mt-4 text-primary">Kategori: <?= $kategori ?></h4>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>No. Plat</th>
                    <th>Merk & Model</th>
                    <th>Spesifikasi</th>
                    <th>Total Biaya Sewa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listKendaraan as $k): ?>
                    <tr>
                        <td><?php 
                            $ref = new ReflectionClass($k);
                            $pId = $ref->getParentClass()->getProperty('id_kendaraan'); $pId->setAccessible(true);
                            echo $pId->getValue($k);
                        ?></td>
                        <td><?php 
                            $pPlat = $ref->getParentClass()->getProperty('no_plat'); $pPlat->setAccessible(true);
                            echo $pPlat->getValue($k);
                        ?></td>
                        <td><?php 
                            $pMerk = $ref->getParentClass()->getProperty('merk_model'); $pMerk->setAccessible(true);
                            echo $pMerk->getValue($k);
                        ?></td>
                        <td><?= $k->tampilkanSpesifikasi() ?></td>
                        <td class="text-success fw-bold">Rp <?= number_format($k->hitungTotalSewa(), 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>

</body>
</html>