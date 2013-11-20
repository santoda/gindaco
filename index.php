<!DOCTYPE html>

<html>
<head>
    <title>GINDACO</title>
</head>
<link rel="stylesheet" href="style/style.css"/>

<body>    			
	<div class="background">
		<div class="header">
			<div class="logo"></div>
			<div class="menu">
				<ul>
					<li>
						<a href="#"><img src="img/menu_1.png"/></a>
					</li>
					<li>
						<a href="#"><img src="img/menu_2.png"/></a>
					</li>
					<li>
						<a href="#"><img src="img/menu_3.png"/></a>
					</li>
					<li>
						<a href="#"><img src="img/menu_4.png"/></a>
					</li>
					<li>
						<a href="#"><img src="img/menu_5.png"/></a>
					</li>
					<li>
						<a href="#"><img src="img/menu_6.png"/></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<div class="content">
			<div class="content_left">
				<div class="testimonial">
					<p>TESTIMONIAL</p>
					<?php 
						$hm = "D:/xampp/htdocs/gindaco"; 
						$hm2 = "http://localhost/gindaco"; 
						include "$hm/hnt.php";
					?>
					
				</div>
				<div class="write">
					<a href="javascript:Popup('news-admin.php')" class="new-testi">
						<img src="img/write.jpg" />
					</a>
				</div>
				<div class="clear"></div>
				<script type="text/javascript">
					 <!--
					  var stile = "top=10, left=10, width=600, height=400 status=no, menubar=no, toolbar=no scrollbar=no";
						 function Popup(apri) {
							window.open(apri, "", stile);
						 }
					 //-->
				</script>
			</div>
			<div class="content_right">
				<img src="img/iklan.png" />
				<img src="img/iklan.png" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer">
			<img src="img/img_1.png" />
			<img src="img/img_2.png" />
			<img src="img/img_3.png" />
			<p>copyright@2013</p>
		</div>
	</div>
</body>
</html>
