<?php
include("functions.php");
printHeader();
?>
<body>
<div id="outer"><?php printMenu();?>
<?php printBanner();?>

<div id="main">
    <div id="content">
        <div id="box1">
			<h2>Contact Us</h2>
			<img src="images/office/DrLiaoOnDesk.JPG" width="550" alt="Dr. Liao's Office">
            <p>Dr. Liao's Office</p>
			<img src="images/office/officeFront.JPG" width="550" alt="Oeyama-moto Office">
            <img src="images/office/officeExterior.JPG" width="550" alt="Oeyama-moto Office side view">
            <p>Oeyama-Moto West Covina Office</p>
            <img src="images/office/officeLobby.JPG" width="550" alt="Waiting Room">
            <img src="images/office/waitingRoom1.JPG" width="550" alt="Waiting Room">
            <img src="images/office/waitingRoom2.JPG" width="550" alt="Waiting Room">
            <img src="images/office/waitingRoom3.JPG" width="550" alt="Waiting Room">
            <img src="images/office/waitingRoom4.JPG" width="550" alt="Waiting Room">
            <p>Waiting Room</p>
	<p>If you have questions about your order, need more information on Allesgen, or have feedback to share, please contact us at:
	</p>
	<p>
	Email: <a href="mailto:kingliao1@yahoo.com"><b>kingliao1@yahoo.com</b></a> or <a href="mailto:info@cancertreatmentus.org"><b>info@cancertreatmentus.org</b></a>
	</br>
	</br>
 	Please include patient's full name and contact information. We will promptly respond within 12 hours.
	</br>
	</br>
	Phone: <b>(626) 388-5407</b> or <b>(626) 388-7524</b>
	</br>
	Fax: <b>(626) 967-2929</b>
	</br>
	Visiting Hours: 
	</br>
	Tuesday-Wednesday, Friday-Saturday:  10am-1pm
	</p>
	

	</div>
	<div id="visitorImages"><h3>訪客留影</h3>
	<?php for($i=1; $i<11; $i++):?>
	<img src="images/visitors/visitor<?php echo $i?>.JPG" width="550" alt="Visitors">
	<?php endfor;?>	
	</div>

</div>
<div id="sidebar1">
    <h3>Treatment Center</h3>
	</br>
    <span class="special">
	3106 E. Garvey Ave. South
	</br>
	West Covina, CA. 91791
	</br>
    U.S.A.
    </span>
</div>	

<br class="clear" />
			</div>
<?php printFooter();?>
		</div>
    <?php printCopyright();?>
	<div style="margin: 1em 0 3em 0; text-align: center;"></div>
</body>
</html>
