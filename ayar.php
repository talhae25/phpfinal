<?php

$baglanti = mysqli_connect("localhost","root","","yemektarifidb");
if (!$baglanti) {
	die("connenctionfailed !!");
}
else
{
	echo "bağlantı gerçekleşti";
	echo "<br>";
}

?>