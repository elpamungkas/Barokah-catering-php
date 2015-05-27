<!DOCTYPE html>
<html lang="en">
<head>
<title> Daftar Paket</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

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
	$query = 'SELECT * FROM tblinput';
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
			
          <a href="index.html">
            <img src="images/logoku.png" alt="Logo alt">          </a>        </h1>  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Beranda</a></li>
               <li class="current"><a href="index-1.php">Paket</a></li>
               <li><a href="index-2.php">Reservasi</a></li>
			   <li><a href="index-4.html">Contacts</a></li>
               <li><a href="index-3.php">Log in</a></li> 
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
<section class="content gallery pad1"><div class="ic">Barokah Catering.com</div>
  <div class="container">
	<div class="form_title color1">
				  <h2>Selamat datang di web Barokah catering.com</h2>
				  <p>Berikut daftar paket catering yang bisa anda order</p>
				  </div>
 	 <?php
  			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		?>
    <div class="row">
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
		  	
            <div class="gall_item"><img src="images/<?php if($line['gambar'] =="") {
													echo "no_image.gif";
												}else {
													echo $line['gambar'];
												} ?>" 
											width="450" height="250" align="middle" /><br />
            <div class="gall_bot">
            <div class="text1">Paket <?php echo $line['paket']; ?><br /></div>
				Harga	: <?php echo $line['harga']; ?><br />
				Keterangan: <?php echo $line['ket']; ?>
            <br>
          </div>
        </div><br>
     	</div>
		<a href="index-2.php" class="btn">Order</a></div>
	<div class="clear sep__1"></div>
    </div>
	<?php } ?>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
        <div class="socials">
          <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus"></a>
          <a href="http://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
        </div>
        <div class="copyright"><span class="brand">Bliss </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
        </div>
      </div>
    </div>
  </div> 
</footer> 
</body>
</html>

