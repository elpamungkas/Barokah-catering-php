<?php
defined('_VALID') or die('not allowed');
function init_login() {
	//simulasi data account nama dan password
	$nama = 'admin';
	$pass = 'admin';
	if (isset($_POST['nama']) && isset($_POST['pass'])) {
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
		if (($n === $nama) && ($p === $pass)) {
		//jika sama, setcokie
		setcookie('nlogin', $n);
		setcookie('time', time());
		
		//redireksi
		?>
		<script type="text/javascript">
		document.location.href="inputjualan/crud.php";
		</script>
		<?php
		} else {
			echo 'Nama/Password tidak sesuai';
			return false;
			}
		}
	}
	function validate() {
	 if (!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time']) ) { ?>
	 <div class="container">
	  <div class="grid_4">
	  	<div class="inner">
		<div class="form_title color1">
		<h2>Log in</h2>
		<form action="" method="post">
		<table border=0 cellpadding=5>
		 <tr>
		 	<div class="tmInput">
		 	<td>Nama</td>
			<td><input type="text" name="nama" /></td>
			</div>
		</tr>
		<tr>
			<div class="tmInput">
			<td>Password</td>
			<td><input type="password" name="pass" /></td>
			</div>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="LOGIN" /></td>
		</tr>
		</table>
		</form>
		</div>
		</div>
	 </div>
	</div>
		<?php
		exit;
		}
		if (isset($_GET['m']) && $_GET['m'] == 'logout') {
		//hapus cookie
			if (isset($_COOKIE['nlogin'])) {
				setcookie('nlogin', '', time() - 3 * 3600);
			}
			if (isset($_COOKIE['time'])) {
				setcookie('time', '', time() - 3 * 3600);
			}
		//redireksi halaman

		?>
		<script type="text/javascript">
		document.location.href="";
		</script>
		<?php
		}
	}
	?>