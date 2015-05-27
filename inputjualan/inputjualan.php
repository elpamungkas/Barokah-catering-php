<!DOCTYPE html>
<html lang="en">
<head>
<title>Input Data</title>
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
       <p><h2>Form Input Paket</h2></p>
	<form action="proses.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	  <table width="473" height="152" border="0">
		<tr>
		  <td width="218" height="100" rowspan="5"><p>
			<input name="imageField" height="100" width="100" type="image" src="../images/no_image.gif" align="middle" />
		  </p>
			<p>
			  <input type="file" name="browse" />
		  </p></td>
		  <td width="93">ID Paket </td>
		  <td width="148"><input type="text" name="id" /></td>
		</tr>
		<tr>
		  <td>Nama Paket </td>
		  <td><input type="text" name="paket" /></td>
		</tr>
		<tr>
		  <td>Keterangan</td>
		  <td><input name="textket" type="text" /></td>
		</tr>
		<tr>
		  <td>Harga</td>
		  <td><input type="text" name="textharga" /></td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td><input type="submit" name="tblsimpan" value="Simpan" /></td>
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