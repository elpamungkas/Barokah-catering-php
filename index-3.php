<!DOCTYPE html>
<html lang="en">
<head>
<title>Login / Logout</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>

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
		 		   
          <a href="index.html">
            <img src="images/logoku.png" alt="Logo alt">          </a>        </h1>  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Beranda</a></li>
               <li><a href="index-1.php">Paket</a></li>
               <li><a href="index-2.php">Reservasi</a></li>
			   <li><a href="index-4.html">Contacts</a></li>
               <li class="current"><a href="index-3.php">Log In</a></li>
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
    <div class="row">
      <div class="grid_4">
	  <div class="form_title color1">
        <?php
				ini_set('display_errors',1);
				define('_VALID',1);
				
				//include file eksternal
				require_once('./auth.php');
				
				init_login();
				validate();
				?>
			<h2>Log Out</h2>
			<p>Selamat Datang di Halaman Administrator Web Barokah Catering.com<br>
			<p>Anda yakin ingin keluar?<br></p>
			<a href="inputjualan/crud.php">Tidak</a><br>
			<a href="?m=logout">Ya</a>  
			</div>
      </div>
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
        <div class="socials">
          <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://plus.google.com/" target="_blank" class="fa fa-google-plus"></a>
          <a href="http://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
        </div>
        <div class="copyright"><span class="brand"><span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>Barokah Catering.com</div>
        </div>
      </div>
    </div>
  </div> 
</footer> 
</body>
</html>

