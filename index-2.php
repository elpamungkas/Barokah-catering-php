<!DOCTYPE html>
<html lang="en">
<head>
<title>Reservasi</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="booking/css/booking.css">
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
    <script src="booking/js/booking.js"></script>

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
          <a href="index.html">
            <img src="images/logoku.png" alt="Logo alt">          </a>        </h1>  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Beranda</a></li>
               <li><a href="index-1.php">Paket</a></li>
               <li class="current"><a href="index-2.php">Reservasi</a></li>
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
<section class="content"><div class="ic">Barokah Catering.com</div>
  <div class="container">
    <div class="row">
      <div class="grid_8">
        <h2>Reserve Your Order</h2>
        <img src="images/sup.jpg" alt="" class="img_inner fleft inn__1">
        <div class="extra_wrapper">
          <div class="text1 tx__1"><a href="#">Tentang Kami</a></div>
		  <div class="form_title color1">
          <p align="justify">Kami memberikan pelayanan terbaik dengan orang-orang yang berpengalaman dalam bidangnya dan kami melayani berbagai paket-paket jasa catering yang para pemesan dapat memilih paket-paket tersebut sesuai kebutuhan pemesan.</p>
          <p align="justify">Kami juga melayani paket-paket lainnya seperti :<br>
		  Catering Snack box,Catering rapat kantor, Catering Lunch box, Catering pesta pernikahan,<br>
		  Catering slametan, Catering seminar, Catering ulang tahun, Catering workshop, dll</p>
		  <p align="justify">Kami berharap menu yang terjangkau buat para klaen kami dapat dan bisa menjadi menu yang terjangkau buat para pemesan untuk itu kami menawarkan menu-menu yang variatif dan terjangkau Dengan harga murah dan pelayanan yang tidak kalah dengan menu- lainya ini semua kami berikan untuk para pemesan kami yang mempunyai angaran yang minim tapi tidak mengecewakan</p>
		  </div>
        </div>
        <div class="clear"></div>
      <div class="grid_4">
        <h2>Reservasi</h2>
        <div class="form_title color1">
        Kami menerima pesanan daerah sekitar Semarang & Mranggen mulai jam 7.00 - 15.00 WIB<br>CP: +62 857 8679 1338</div>
        <form id="bookingForm" action="booking.php" method="post" enctype="multipart/form-data" name="bookingForm">
          <div class="tmInput">
            <input name="tnama" placeholder="Nama:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
          </div>
        <div class="tmInput">
          <input name="ttel" placeholder="Nomor Telepon:" type="text" data-constraints="@NotEmpty @Required @Telephone">
        </div> 
		 <div class="fl1 ">
        <em>Paket</em>
        <select name="paket" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
          Paket
          <?php
  			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
			
			echo "<option value='".$line['paket']."' label='".$line['paket']."'>".$line['paket']."</option>";
			} ?>
        </select>
        </option>
        </select>
        </div>  
		<div class="tmInput">
		  <input name="tjmlpsn" placeholder="Jumlah Pesanan:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
		</div>  
          <strong class="dt">Tanggal Diambil:</strong>
         <label class="tmDatepicker">
          <input type="text" name="tdate"  placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
        </label>
        <div class="clear"></div>
     	 
        <div class="tmTextarea">
            <textarea name="tmessage" placeHolder="Message:" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
        </div>
		<table border="0">
		<tr>
			<td><input name="tsimpan" type="submit" value="Simpan"></td>
		</tr>
		</table>
    </form>
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