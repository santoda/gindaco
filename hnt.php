<!-- This utility is provided by HIOX INDIA   -->
<!-- This is a copyright product of HIOXINDIA -->
<!--     Visit us at hioxindia.com            -->
<?php 
$file1 = "$hm/colors.txt";
$lines1 = file($file1);
//$count = count($lines1)

foreach ($lines1 as $line_num1 => $line1)
{
	$spos = strpos($line1,'ackground-color="');
	
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+18));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,18,($spos2-($spos+17)));
	$bgcol = $str;
	//echo($bgcol);
	}
	
	$spos1 = strpos($line1,"ont-color=");
	if($spos1 != null && $spos1 > 0)
	{
	$spos2 = strpos($line1,'"',($spos1+12));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,12,($spos2-($spos1+11)));
	$fontcol = $str;
	$linkcol = $fontcol;	
	//echo("||".$fontcol);
	}

	$spos1 = strpos($line1,"ink-color=");
	if($spos1 != null && $spos1 > 0)
	{
	$str = substr($line1,12,(strlen($line1)-15));
	$linkcol = $str;
	echo("||".$linkcol);
	}


	$spos = strpos($line1,"crollamount=");
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+14));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,14,($spos2-($spos+13)));
	$scamount = $str;
	//echo("||".$scamount);
	}

	$spos = strpos($line1,"crolldelay=");
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+13));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,13,($spos2 - ($spos+12)));
	$scdelay = $str;
	//echo("||".$scdelay);
	}

	$spos = strpos($line1,"idth=");
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+7));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,7,($spos2-($spos+6)));
	$width = $str;
	//echo("||".$width);
	}

	$spos = strpos($line1,"eight=");
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+8));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,8,($spos2-($spos+7)));
	$height = $str;
	//echo("||".$height);
	}
	
	$spos = strpos($line1,"ont-size=");
	if($spos != null && $spos > 0)
	{
	$spos2 = strpos($line1,'"',($spos+11));
	//echo(".....".$spos."------".$spos2);

	$str = substr($line1,11,($spos2-($spos+10)));
	$fsize = $str;
	//echo("||".$fsize);
	}

}

?>

<table width=<?php echo($width); ?> height=<?php echo($height); ?> >
<tr><td>
<marquee height=<?php echo($height); ?> width=<?php echo($width); ?> bgcolor=<?php echo($bgcol); ?> scrollamount=<?php echo($scamount); ?> scrolldelay=<?php echo($scdelay); ?> direction=up onmouseover="this.stop()" onmouseout="this.start()" style="font-family:Arial; padding-left:10px;">
<br>
<?php 
$file1 = "$hm/news.txt";
$lines = file($file1);
$count = count($lines);
$newsf = false;
$linkf = true;
foreach ($lines as $line_num => $line)
{
	if($newsf == false && $linkf == true)
	{
		$spos = strpos($line,"Testimonial=");
		$spos3 = strpos($line,"NamaTanggal=");
		
		if($spos != null && $spos > 0)
		{
             $spos2 = strpos($line,'"',($spos+6));

             $newsstr = substr($line,14,-1);
		 echo("<div align=left style=\"color: ".$fontcol."; font-size:12px;\" >".$newsstr."<br/>");	
 		 // $newsf = true;
		}
		else if($spos3 != null && $spos3 > 0)
		{
             $spos2 = strpos($line,'"',($spos+6));

			 $tanggalstr = substr($line,14,-1);
		 echo("<div align=left style=\"color: ".$fontcol."; font-size:12px; font-weight:bold;\" >".$tanggalstr."</div><br/><br/>");	
 		 // $newsf = true;
		}
	}
	else if( $linkf == true &&  $newsf == true)
	{
		$spos = strpos($line,"LINK=");
		if($spos != null && $spos > 0)
		{
		 $spos2 = strpos($line,'"',($spos+6));
	
             $linkstr = substr($line,7,($spos2-($spos+1)));

		 //echo("<div align=left><a href=".$linkstr." style=\"color: ".$linkcol."; \">".$linkstr."</a></div><br><br>");
		 echo("<div align=left style=\"margin: 10px;\"><a href=".$linkstr." style=\"color: ".$linkcol."; font-size: ".$fsize."; text-decoration: none; 
font-weight: bold;\">".$newsstr."</a></div><br/><br/>");	
	       $newsf = false;
             $linkf = true;
		}
		else
		{
		  	$linkf = false;
			echo("<div style=\"color: red; font-weight: bold;\"> Improper Usage of HIOX NEWS TICKER </div>");
		}
	}
}
?>
<br>
</marquee>
<div align=center style="background-color: <?php echo($bgcol); ?>; color: white; font-size: 10px;">
</td></tr>
</table>