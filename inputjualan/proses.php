<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//jika tombol simpan
	if(isset($_POST['tblsimpan'])) {
		$idpkt = $_POST['id'];
		$paket = $_POST['paket'];
		$ket = $_POST['textket'];
		$hrg = $_POST['textharga'];
		$gmbr = $_FILES['browse'];
		
		//1 konek database
		$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
		//2 pilih database
		mysql_select_db('barokah') or die('could not select database');
		if($_FILES['browse']['size']!= 0) {
		if($gmbr['type'] == "image/jpeg" || $gmbr['type'] == "image/png") {
				$errorgambar = false;	
			}else {
				$errorgambar = true;
			}
			//ukuran
			if($gmbr['size']<=2000000) {
				$errorsize = false;
			}else {
				$errorsize = true;
			}
	
			if($errorgambar || $errorsize) {
			?>
				<script language='JavaScript'>alert('Kesalahan pada gambar, harus JPEG/PNG dan tidak lebih dari 2MB');
				window.location = "editpaket.php";
				</script> 
			<?php
			}else {
				//lakukan insert data & upload file
				//upload file
				$uploadDir = '../images/';
				$uploadFile = $uploadDir.basename($gmbr['name']);
				move_uploaded_file($gmbr['tmp_name'], $uploadFile);
				
				$query = "INSERT INTO `barokah`.`tblinput` (`id_pkt`, `paket`, `ket`, `harga`, `gambar`) 
				VALUES ('$idpkt', '$paket', '$ket', '$hrg', '$gmbr[name]')";
				
				$result = mysql_query($query) or die ('mysql_error');
		//4
		if($result) {
			?>
				<script language='JavaScript'>alert('Anda telah berhasil menambahkan data');
				window.location = "crud.php";
				</script> 
			<?php
			} else {
			?>
				<script language='JavaScript'>alert('Anda belum berhasil menambahkan data Harap coba kembali');
				window.location = "crud.php";
				</script>
			<?php
			}	
			}
		} else {
				$query = "INSERT INTO `barokah`.`tblinput` (`id_pkt`, `paket`, `ket`, `harga`) 
				VALUES ('$idpkt', '$paket', '$ket', '$hrg')";
				
				$result = mysql_query($query) or die ('mysql_error');
		//4
		if($result) {
			?>
				<script language='JavaScript'>alert('Anda telah berhasil menambahkan data');
				window.location = "crud.php";
				</script> 
			<?php
			} else {
			?>
				<script language='JavaScript'>alert('Anda belum berhasil menambahkan data Harap coba kembali');
				window.location = "crud.php";
				</script>
			<?php
			}
		}
		//3
			
	}
	//jika tmbl update ditekan
	if(isset($_POST['tblupdate'])) {
		$idpkt = $_POST['id'];
		$paket = $_POST['paket'];
		$ket = $_POST['textket'];
		$hrg = $_POST['textharga'];
		$gmbr = $_FILES['browse'];
		//print_r($gmbr);
		//1 konek database
		$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
		//2 pilih database
		mysql_select_db('barokah') or die('could not select database');
		if($_FILES['browse']['size']!= 0) {
			if($gmbr['type'] == "image/jpeg" || $gmbr['type'] == "image/png") {
				$errorgambar = false;	
			}else {
				$errorgambar = true;
			}
			
			//ukuran
			if($gmbr['size']<=2000000) {
				$errorsize = false;
			}else {
				$errorsize = true;
			}
			
			if($errorgambar || $errorsize) {
			?>
				<script language='JavaScript'>alert('Kesalahan pada gambar, harus JPEG/PNG dan tidak lebih dari 2MB');
				window.location = "editpaket.php";
				</script> 
			<?php
			}else {
				//lakukan insert data & upload file
					//upload file
					$uploadDir = '../images/';
					$uploadFile = $uploadDir.basename($gmbr['name']);
					move_uploaded_file($gmbr['tmp_name'], $uploadFile);
					
						$query = "UPDATE `barokah`.`tblinput` 
						SET `paket` = '$paket', 
							`harga` = '$hrg', 
							`ket` = '$ket', 
							`gambar` = '$gmbr[name]' 
						WHERE `tblinput`.`id_pkt` = '$idpkt';";
			}
		}else {
				$query = "UPDATE `barokah`.`tblinput` 
				SET `paket` = '$paket', 
					`harga` = '$hrg', 
					`ket` = '$ket' 
				WHERE `tblinput`.`id_pkt` = '$idpkt';";
		}
		//3
		$result = mysql_query($query) or die ('mysql_error');
			//4
		if($result) {
		?>
			<script language='JavaScript'>alert('Anda telah berhasil mengubah data');
			window.location = "crud.php";
			</script> 
		<?php
		} else {
		?>
			<script language='JavaScript'>alert('Anda belum berhasil mengubah data Harap coba kembali');
			window.location = "crud.php";
			</script>
		<?php
		}
	}
	//proses menghapus data
	if(isset($_GET['aksi']) && ($_GET['aksi']=='hapus')) {
	$idpkt = $_GET['idpkt'];
	
	$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
	mysql_select_db('barokah') or die('could not select database');
	$query = "DELETE FROM `barokah`.`tblinput` WHERE `tblinput`.`id_pkt` = '$idpkt'"; 
	$result = mysql_query($query) or die('Query failed: '. mysql_error());
	if($result) {
			?>
				<script language='JavaScript'>alert('Anda telah berhasil menghapus data');
				window.location = "crud.php";
				</script> 
			<?php
			} else {
			?>
				<script language='JavaScript'>alert('Anda belum berhasil menghapus data Harap coba kembali');
				window.location = "crud.php";
				</script>
			<?php
			}
	}
	//jika tombol update pelanggan ditekan
	if(isset($_POST['tblbaru'])) {
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];
		$paket = $_POST['textpkt'];
		$jml = $_POST['textjml'];
		$tgl = $_POST['texttgl'];
		$psn = $_POST['textpesan'];
		$ket = $_POST['keterangan'];
		//1 konek database
		$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
		//2 pilih database
		mysql_select_db('barokah') or die('could not select database');
		//3
		$query = "UPDATE `barokah`.`booking` 
				SET `nama_pemesan` = '$nama', 
					`pkt` = '$paket',
					`jml_pesan` = '$jml',
					`tgl_diambil` = '$tgl',
					`psn` = '$psn',
					`ket` = '$ket' 
				WHERE `booking`.`noHP` = '$nohp';";
		$result = mysql_query($query) or die('Query failed: '. mysql_error());
		if($result) {
			?>
				<script language='JavaScript'>alert('Anda telah berhasil update data');
				window.location = "lihatdata.php";
				</script> 
			<?php
			} else {
			?>
				<script language='JavaScript'>alert('Anda belum berhasil update data Harap coba kembali');
				window.location = "lihatdata.php";
				</script>
			<?php
			}
	}
	//proses menghapus data pelanggan
	if(isset($_GET['aksi']) && ($_GET['aksi']=='delete')) {
	$nohp = $_GET['nohp'];
	
	$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
	mysql_select_db('barokah') or die('could not select database');
	$query = "DELETE FROM `barokah`.`booking` WHERE `booking`.`noHP` = '$nohp'"; 
	$result = mysql_query($query) or die('Query failed: '. mysql_error());
	if($result) {
			?>
				<script language='JavaScript'>alert('Anda telah berhasil menghapus data');
				window.location = "lihatdata.php";
				</script> 
			<?php
			} else {
			?>
				<script language='JavaScript'>alert('Anda belum berhasil menghapus data Harap coba kembali');
				window.location = "lihatdata.php";
				</script>
			<?php
			}
	}
?>
</body>
</html>