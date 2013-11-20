<?php
$area = $_POST['area'];
$fp = fopen("news.txt","w+") or exit("unable to open the file");
if($fp != null)
{
fwrite($fp,$area);
}
fclose($fp);

?> 
<script>
self.close();
</script>

