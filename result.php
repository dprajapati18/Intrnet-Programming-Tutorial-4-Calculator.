<?php
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";

$principle=$_GET['principle'];
//<br>
$rate=$_GET['rate'];
//<br>
$time=$_GET['time'];
//<br>
$i=($principle*$rate*$time)/100;
//<br>
?>
<h1>Your Interest is:<?=$i?></h1>
