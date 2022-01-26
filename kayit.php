<?php  
include("ayar.php");
 error_reporting(0);
$adi = $_POST["adi"];
$malzeme = $_POST["malzeme"];
$tarif = $_POST["tarif"];

$add = "INSERT INTO yemeklistesi(yemek_adi,yemek_malzeme,yemek_tarif) VALUES('$adi','$malzeme','$tarif')";
 
if ($add)
{
    echo "Ekleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
}
else
{
    echo "Hata";
}
	echo "<a href='index.php'>Anasayfaya Don</a>";
?>