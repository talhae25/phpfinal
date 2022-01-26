<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="stil.css" />
</head>
<body>


<div class="userform">
<h1>Yemek Ekleme Formu</h1>
<form action="kayit.php" method="POST">
	
<input type="text" name="adi" id="adi" placeholder="yemek adı" class="yazi" />
<br />
<input type="text" name="malzeme" id="malzeme" placeholder="yemek malzeme" class="yazi" />
<br />
<input type="text" name="tarif" id="tarif" placeholder="yemek tarif" class="yazi" />
<br />
<input type="submit" name="gonder" value="Kayıt" class="buton" />
<input type="reset" name="sil" value="Temizle" class="buton" />
</form>
</div>
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
</body>
</html>