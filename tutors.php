<?php
include_once ("admin/config.php");
include_once ("admin/inc_fungsi.php");

$id = dapatkan_id();

$sql1 = "SELECT * FROM tutors WHERE id = '$id'";
$q1 = mysqli_query($koneksi, $sql1);
$n1 = mysqli_num_rows($q1);
$r1 = mysqli_fetch_array($q1);

$nama = $r1['nama'];
?>
<?php include_once ("inc_header.php");
if ($nama ==''){
	echo "<div class=\"alert alert-danger\" role=\"alert\">Halaman tidak ditemukan</div>";
}else{
	?>
	<style>
		.lokasi_foto{
			float: left;
			width: 20%;
			margin-top: 20px;
		}
		.lokasi_foto img{
            width: 150px; /* Set a fixed width */
            height: 150px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the entire box */
            border-radius: 50%;
		}
		.lokasi_deskripsi{
			margin-top: 20px;
            float: right;
			width: 75%;
            padding-top: 20px;
		}
	</style>
	<div class="lokasi_foto">
		<img src="<?php echo url_dasar();?>/gambar/<?php echo tutors_foto($id);?>" class="img-fluid">
	</div>
	<div class="lokasi_deskripsi">
		<h1><?php echo $r1['nama']?></h1>
		<?php echo set_isi($r1['isi']);?>
	</div>
	<br style="clear: both;">
	<?php
}
?>
<?php include_once ("inc_footer.php") ?>
