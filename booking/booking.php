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
	$query = "INSERT INTO `barokah`.`booking` (`nmaPemesan`, `noHP`, `pkt`, `jml_pesan`, `tgl_diambil`, `psn`) VALUES ('$nama', '$nohp', '$paket', '$jml', '$tgl', '$psn')";
	$result = mysql_query($query) or die('Query failed: '. mysql_error());
	
	if($result) {
	echo 'Anda telah berhasil booking... Terima kasih';
	?>
	<a href="index-2.html">Kembali</a>
	<?php
	} else {
	echo 'Anda belum berhasil booking... Harap coba lagi';
	}
}
?>