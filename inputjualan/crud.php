<!DOCTYPE html>
<html lang="en">
<head>
<title>CRUD Data</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="../booking/css/booking.css">
<link rel="stylesheet" href="../css/stuck.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/script.js"></script> 
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/tmStickUp.js"></script>
<script src="../js/jquery.ui.totop.js"></script>
    <script src="../booking/js/booking.js"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});

  }); 
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body>
<?php
	//1
	mysql_connect('localhost','root','');
	//2
	mysql_select_db('barokah');
	//3
	$query = 'SELECT * FROM tblinput ORDER BY paket ASC';
	$result = mysql_query($query);
?>
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="../index.html">
            <img src="../images/logoku.png" alt="Logo alt">          </a>        </h1>  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="inputjualan.php">Input Data</a></li>
               <li class="current"><a href="crud.php">CRUD Data</a></li>
			   <li><a href="lihatdata.php">Lihat Pelanggan</a></li>
               <li><a href="../index-3.php">Logout</a></li> 
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</header>        

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">Barokah Catering.com</div>
  <div class="container">
  		<h2>Selamat Datang di Halaman Administrator Web Barokah Catering.com<br></h2>
        <p>Data Penjualan Paket Barokah Catering.com</p>
        <div class="form_title color1">
       	Pencarian Data Paket</div>
        <form id="form1" name="form1" method="post" action="">
          <?php
				//connecting, selecting database
				$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
				//echo 'Connected successfully';
				mysql_select_db('barokah') or die('could not select database');
				//jika tombol cari ditekan
				if(isset($_POST['tmblcari'])) {
					$query = "SELECT * FROM `tblinput`".
							" WHERE `".$_POST['kriteria']."` LIKE '".$_POST['textkeyword']."'";
					$result = mysql_query($query) or die('Query failed: '. mysql_error());
				} else {	//jika tidak ditekan
					$query = 'SELECT * FROM tblinput';
					$result = mysql_query($query) or die('Query failed: '. mysql_error());
				}
				?>
			  Kriteria Pencarian
			  <select name="kriteria">
				<option value="id_pkt">ID Paket</option>
				<option value="paket">Nama Paket</option>
				<option value="harga">Harga</option>
		  </select> 
			  Kata kunci
			  <input type="text" name="textkeyword" />
			  <input type="submit" name="tmblcari" value="Cari" />
	</form>
			<p>&nbsp; </p>
			<form id="form2" name="form2" method="post" action="" >
			<p style="font-family:Arial;">Daftar Paket makanan ready</p>
			<table width="657" height="171" border="1">
			  <tr>
				<th width="112" align="center" scope="col">Gambar </th>
				<th width="80" align="center" scope="col">Id Paket </th>
				<th width="82" align="center" scope="col">Nama Paket</th>
				<th width="86" align="center" scope="col">Keterangan</th>
				<th width="46" align="center" scope="col">Harga</th>
				<th colspan="3" align="center" scope="col">Operasi</th>
			  </tr>
			  <?php
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				?>
			  <tr>
				<td height="108" align="center"><img src="../images/<?php if($line['gambar'] =="") {
																echo "no_image.gif";
															}else {
																echo $line['gambar'];
															} ?>" 
														width="100" height="100" align="middle" /></td>
				<td><?php echo $line['id_pkt']; ?></td>
				<td><?php echo $line['paket']; ?></td>
				<td><?php if($line['ket'] ==""){
								echo "Belum Lunas"; 
							}else {
								echo "Lunas";
							}
							?></td>
				<td><?php echo $line['harga']; ?></td>
				<td align="center" width="85"><a href="editpaket.php?aksi=edit&idpkt=<?php echo $line['id_pkt'] ?>">Edit</a></td>
				<td align="center" width="85"><a href="proses.php?aksi=hapus&idpkt=<?php echo $line['id_pkt'] ?>">Hapus</a></td>
				<td align="center" width="85"><a href="../index-1.php">Lihat di halaman</a></td>
			  </tr>
			  <?php } ?>
			</table>

    </form>
  </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
  		<h2>Barokah Catering.com</h2>
      </div>
    </div>
  </div> 
</footer> 
  <script>
  $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
    $(function() {
   $('#bookingForm input, #bookingForm textarea').placeholder();
  });
    
  </script>
</body>
</html>