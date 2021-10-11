<?php

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class pembayaran
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>

<div class="card border-light bg-info">
    
    <div class="card-body text-dark">
        <h5 class="card-title">Table Pembayaran</h5>
        <h5 class=" card-title"><a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode('id_po_pem') ?>">Add Data</a></h5>

        <p class="card-text">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Bulan Bayar</th>
                    <th scope="col">Tahun Bayar</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Jumlah Bayar</th>
                    <th scope="col" class="text-center">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Decision validation variabel
                if (isset($GetPembayaran)) {
                    $no = 1;
                    foreach ($GetPembayaran as $Get) {
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_bayar']; ?></td>
                            <td><?php echo $Get['nominal']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td class="text-center">
                                <a class="btn btn-outline-light" href="main.php?menu=<?php echo base64_encode('id_pu_pem') ?>&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>"><img src="view.png" width="24"></a>
                                <button class="btn btn-outline-danger" onclick="konfirmasi('<?php echo base64_encode($Get['id_pembayaran']) ?>')">Delete</button>
                        </tr>
                <?php
                    }
                }
                ?>


            </tbody>
        </table>
        </p>
    </div>
</div>

<script>
    function konfirmasi(id_pembayaran) {
        var a = id_pembayaran
        if (window.confirm('apakah anda ingin menghapus data ini ?')) {
            window.location.href = '../Config/Routes.php?function=delete_pembayaran&id_pembayaran=' + a;
        };
    }
</script>