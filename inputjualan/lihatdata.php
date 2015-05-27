<!DOCTYPE html>
<html lang="en">
<head>
<title>Lihat Data Pelanggan</title>
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
	$query = 'SELECT * FROM booking ORDER BY paket ASC';
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
               <li><a href="crud.php">CRUD Data</a></li>
			   <li class="current"><a href="lihatdata.php">Lihat Pelanggan</a></li>
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
        <h2>Data Pelanggan / Pemesanan Barokah Catering.com</h2>
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
					$query = "SELECT * FROM `booking`".
							" WHERE `".$_POST['kriteria']."` LIKE '".$_POST['textkeyword']."'";
					$result = mysql_query($query) or die('Query failed: '. mysql_error());
				} else {	//jika tidak ditekan
					$query = 'SELECT * FROM booking';
					$result = mysql_query($query) or die('Query failed: '. mysql_error());
				}
				?>
			  Kriteria Pencarian
			  <select name="kriteria">
                <option value="nama_pemesan">Nama Pemesan</option>
                <option value="pkt">Nama Paket</option>
                <option value="tgl_diambil">Tanggal diambil</option>
              </select> 
		  Kata kunci
		  <input type="text" name="textkeyword" />
			  <input type="submit" name="tmblcari" value="Cari" />
	</form>
			<p>&nbsp; </p>
			<form id="form2" name="form2" method="post" action="" >
			<p style="font-family:Arial;">Daftar Pelanggan</p>
			<table width="602" height="171" border="2">
			  <tr>
				<th width="99" align="center" scope="col">Nama Pemesan</th>
				<th width="51" align="center" scope="col">No HP</th>
				<th width="46" align="center" scope="col">Nama Paket</th>
				<th width="49" align="center" scope="col">Jumlah Pesanan</th>
				<th width="70" align="center" scope="col">Tanggal diambil</th>
				<th width="90" align="center" scope="col">Pesan</th>
				<th width="71" align="center" scope="col">Keterangan</th>
				<th colspan="2" align="center" scope="col">Operasi</th>
			  </tr>
			  <?php
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				?>
			  <tr>
				<td><?php echo $line['nama_pemesan']; ?></td>
				<td><?php echo $line['noHP']; ?></td>
				<td><?php echo $line['pkt']; ?></td>
				<td align="center"><?php echo $line['jml_pesan']; ?></td>
				<td align="center"><?php echo $line['tgl_diambil']; ?></td>
				<td align="center"><?php echo $line['psn']; ?></td>
				<td><?php echo $line['ket']; ?></td>
				<td align="center" width="60"><a href="editpelanggan.php?aksi=edit&nohp=<?php echo $line['noHP'] ?>">Edit</a></td>
				<td align="center" width="60"><a href="proses.php?aksi=delete&nohp=<?php echo $line['noHP'] ?>">Hapus</a></td>
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