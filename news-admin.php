<?php $file = file("news.txt"); ?>

<form action="ticker.php" method="post">
<center><textarea name="area" id="area" style="height: 200px; width: 500px;">
<?php
	foreach($file as $text) {
		echo $text;
	} 
?>
</textarea><br/><br/>
<input type="submit" value="Update Testimonial"/></center>
</form>
<br/><br/>
<center> <label style="color:red">Instruction</label> <br/> Insert your testimonial after symbol ("),  <br/>
 Please refresh your site after click "update testimonial"</center>