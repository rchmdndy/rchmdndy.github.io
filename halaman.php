<?php
include_once ("admin/config.php");
include_once ("admin/inc_fungsi.php");

$id = dapatkan_id();

$sql1 = "SELECT * FROM halaman WHERE id = '$id'";
$q1 = mysqli_query($koneksi, $sql1);
$n1 = mysqli_num_rows($q1);
$r1 = mysqli_fetch_array($q1);

$judul = $r1['judul'];
?>
<?php include_once ("inc_header.php");
	if ($judul ==''){
		echo "<div class=\"alert alert-danger\" role=\"alert\">Halaman tidak ditemukan</div>";
	}else{
		?>
		<p class="deskripsi"><?php echo $r1['kutipan'];?></p>
		<h1><?php echo $r1['judul']?></h1>
		<?php echo set_isi($r1['isi']);?>
<?php
	}
?>
<?php include_once ("inc_footer.php") ?>
