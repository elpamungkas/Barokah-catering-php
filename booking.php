<?php 
if(isset($_POST['tsimpan'])) {
	$nama = $_POST['tnama'];
	$nohp = $_POST['ttel'];
	$paket = $_POST['paket'];
	$jml = $_POST['tjmlpsn'];
	$tgl = $_POST['tdate'];
	$psn = $_POST['tmessage'];
	
	
	$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
	mysql_select_db('barokah') or die('could not select database');
	$query = "INSERT INTO `barokah`.`booking` (`nama_pemesan`, `noHP`, `pkt`, `jml_pesan`, `tgl_diambil`, `psn`, `ket`) VALUES ('$nama', '$nohp', '$paket', '$jml', '$tgl', '$psn', 'BL')";
	$result = mysql_query($query) or die('Query failed: '. mysql_error());
	
	if($result) {
	?>
	<script language='JavaScript'>alert('Anda telah berhasil booking... Terima kasih');
	window.location = "index-2.php";
	</script> 
	<?php
		} else {
	?>
	<script language='JavaScript'>alert('Anda belum berhasil booking... Harap coba kembali');
	window.location = "index-2.php";
	</script>
	<?php
	}
}
?>