<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

		<nav>
			<div class="p-3 mb-2 bg-info text-dark">
				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link" aria-current="page" href="main.php?menu=<?php echo base64_encode('id_s') ?>">Siswa</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_k') ?>">Kelas</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_sp') ?>">SPP</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pet') ?>">Petugas</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pem') ?>">Pembayaran</a>
				  </li>
				</ul>
			</div>
		</nav>

		<br>

     <div class="container-fluid">
        <?php
        if (isset($_GET['menu'])) {
            $id = base64_decode($_GET['menu']);
        } else {
            $id = "";
        }

        if ($id == 'id_k') {
            include('View_kelas.php');
        } elseif ($id == 'id_po_k') {
            include('View_post_kelas.php');
        } elseif ($id == 'id_pu_k') {
            include('View_put_kelas.php');
        } elseif ($id == 'id_s') {
            include('View_siswa.php');
        } elseif ($id == 'id_po_s') {
            include('View_post_siswa.php');
        } elseif ($id == 'id_pu_s') {
            include('View_put_siswa.php');
        } elseif ($id == 'id_sp') {
            include('View_spp.php');
        } elseif ($id == 'id_po_sp') {
            include('View_post_spp.php');
        } elseif ($id == 'id_pu_sp') {
            include('View_put_spp.php');
        } elseif ($id == 'id_pet') {
            include('View_petugas.php');
        } elseif ($id == 'id_po_pet') {
            include('View_post_petugas.php');
        } elseif ($id == 'id_pu_pet') {
            include('View_put_petugas.php');
        } elseif ($id == 'id_pem') {
            include('View_pembayaran.php');
        } elseif ($id == 'id_po_pem') {
            include('View_post_pembayaran.php');
        } elseif ($id == 'id_pu_pem') {
            include('View_put_pembayaran.php');
        } else {
            include('Home.php');
        }
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>