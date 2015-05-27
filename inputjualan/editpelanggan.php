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
	$link = mysql_connect('localhost','root','')or die('could not connect: ' .mysql_error());
	mysql_select_db('barokah') or die('could not select database');
	$query = "SELECT * FROM `booking` WHERE `noHP` = '".$_GET['nohp']."'";
	$result = mysql_query($query) or die('Query failed: '. mysql_error());
	
	$line = mysql_fetch_array($result);	
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
            <div class="clear"></div>
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
        <h2>Form Update Pelanggan</h2>
<form action="proses.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="464" height="152" border="0" cellspacing="10" cellpadding="5" style="font-family:Arial" align="center">
    <tr>
      <td width="88">Nama Pelanggan</td>
      <td width="164"><input type="text" name="nama" value="<?php echo $line['nama_pemesan']; ?>" /></td>
    </tr>
    <tr>
      <td>No HP</td>
      <td><input type="text" name="nohp" value="<?php echo $line['noHP']; ?>" /></td>
    </tr>
    <tr>
      <td>Nama Paket</td>
      <td><input name="textpkt" type="text" value="<?php echo $line['pkt']; ?>"/></td>
    </tr>
    <tr>
      <td>Jumlah Pesan</td>
      <td><input type="text" name="textjml" value="<?php echo $line['jml_pesan']; ?>" /></td>
    </tr>
	<tr>
      <td>Tanggal Diambil</td>
      <td><input type="text" name="texttgl" value="<?php echo $line['tgl_diambil']; ?>" /></td>
    </tr>
	<tr>
      <td>Pesan</td>
      <td><input type="text" name="textpesan" value="<?php echo $line['psn']; ?>" /></td>
    </tr>
	<tr>
      <td>Keterangan</td>
      <td><select name="keterangan">
				<option value="BL">Belum Lunas</option>
				<option value="L">Lunas</option>
				</select> </td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="tblbaru" value="Update" /></td>
    </tr>
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