 <?php
$fscrn = $_POST['fscrn'];
$saveTO = "full=".$fscrn."&";
$openTO = fopen ("video.txt", "w");
fwrite($openTO, $saveTO);
fclose($openTO);
?> 