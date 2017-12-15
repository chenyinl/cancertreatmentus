<?php
function printHeader(){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="Oeyama-Moto Cancer Treatment Center & Research Foundation, Allesgen Alternative Treatment, Cancer Treatment" content="" />
		<title>Oeyama-Moto Cancer Treatment Center & Research Foundation</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="contact.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="style_print.css" media="print"/>
        <script src="nocopy.js"></script>
        
    
<?php }

function printMenu(){
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42633770-1', 'oeyamamotocancerresearchfoundation.org');
  ga('send', 'pageview');

  </script>
<div id="header">
	<div id="nav">
		<h1>
			
				<a href="index.php">Oeyama Moto Cancer Research Foundation</a>
			
		</h1>
		<br class="clear" />
  </div>
</div>
<?php }

function printBanner(){
?>
<div id="banner">
	<img class="no_print_image" src="images/pic02.jpg" width="1180" height="320" alt="" />
	<div id="logo">
<a href="index.php">首頁 Home</a>
<a href="review.php">評論 Review</a>
<a href="research.php">癌症治療 Treatment</a>
<a href="aboutus.php">另類療法 Comosain Alternative</a>
<a href="contact.php">聯絡方式 Contact</a>
<a href="spoof.php">假冒網站 Spoof</a>

<!--<a href="#">Oeyama-moto Cancer Treatment Center</a>-->
	</div>				
</div>
<?php
}
function printFooter(){
?>
<div id='footer'>
    <h2>Oeyama Moto Cancer Research Foundation (USA)</h2>
  <div class="items">
  <div class="item"><img width='25px', height='25px'
            src='/images/contact/GoogleMap_Icon.png'>
        <b>Address</b><br/> 3106 E. Garvey Ave South<br/>
        West Covina, CA 91791</br>
        USA <br/>
        
        <a href='https://goo.gl/maps/TNgfha1KZF52'>[Google Map 按這裡]</a>
        
  </div>
  <div class="item"><img width='25px', height='25px'
            src='/images/contact/Phone_Icon.png'>
      <b>Phone</b><br/>(626) 388-5407<br/>(626) 388-7524<br/>
  <b><img width='25px', height='25px'
        src='/images/contact/Fax_Icon.png'>
    Fax</b><br/>(626) 967-2929
  </div>
  
  <div class="item">
      <img width='25px', height='25px'
            src='/images/contact/Email_Icon.png'>
      <b>Email</b><br/>
    <a href="mailto:kingliao1@yahoo.com" 
        target="_blank">kingliao1@yahoo.com</a>
  </div>
  
  <div class="item"><img src='/images/contact/LINE_Icon.png'  
    width='25px', height='25px'
  title='LINE'>
  <b>LINE</b><br/>judybenedict<br/><a href='/images/contact/judybenedict_line_QR.png'>[QR 二維碼按這裡]</a>
  <br/><br/>

      <img src='/images/contact/WECHAT_Icon.png'  
    width='25px', height='25px'
  title='WeChat'>
  <b>WeChat</b><br/><a href="http://weixin.qq.com/r/4P17YxvEpEbbrV8A96jy">Allesgencure</a>
  <a href='images/contact/wechatQRCode.png'><br/>[QR 二維碼按這裡]</a>
  </div>
</div>
</div>
<?php
}

function printCopyright(){
?>
<div id="copyright">
  <p>©2012 Oeyama Moto Cancer Research Foundation. All rights reserved. <br/> The material on this site is for informational purposes  only, and is not a substitute for medical advice,
  <br/>diagnosis or treatment  provided by a qualified health care provider.</p>
</div>
<?php
}
