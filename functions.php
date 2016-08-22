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
<a href="index.php">Home 首頁</a>
<a href="review.php">Review 評論</a>
<a href="research.php">Treatment 癌症治療</a>
<a href="aboutus.php">Comosain Alternative 另類療法</a>
<a href="contact.php">Contact Us 聯絡方式</a>
<a href="spoof.php">Spoof 假冒網站</a>

<!--<a href="#">Oeyama-moto Cancer Treatment Center</a>-->
	</div>				
</div>
<?php
}
function printFooter(){
?>
<div id="footer">
	<div id="footerContent">
		<h3>Digital Contact</h3>
		<div class="form">
		  <p>E-mail <a href="mailto:kingliao1@yahoo.com" target="_blank">kingliao1@yahoo.com</a><br/>
          WeChat 微信 <a href="http://weixin.qq.com/r/4P17YxvEpEbbrV8A96jy">Allesgencure</a><br/>
          <a href="images/wechatQRCode.png"><img class=" wp-image-8207967" src="images/wechatQRCode.png" alt="二維碼 " width="64" /></a>
          </p>
		</div>
       
	</div>
	<div id="footerSidebar1">
		<h3>Oeyama Moto Cancer<br/>Research Foundation (USA)</h3>
        <p>
        3106 E. Garvey Avenue South<br/>
        West Covina, California 91791</br>
        U.S.A.
        </p>
    </div>
	<div id="footerSidebar2">
	  <h3>Phone</h3>
		  <p>Tel: (626) 388-5407<br/>
		    or (626) 388-7524 <br/>
		    Fax: (626) 967-2929
        </p>
	</div>
	<br class="clear" />
</div>
<?php
}

function printCopyright(){
?>
<div id="copyright">
  <p>©2012 Oeyama-Moto Cancer Treatment Center &amp; Research Foundation. All rights reserved. <br/> The material on this site is for informational purposes  only, and is not a substitute for medical advice,
  <br/>diagnosis or treatment  provided by a qualified health care provider.</p>
</div>
<?php
}
