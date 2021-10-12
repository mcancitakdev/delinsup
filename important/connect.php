<?php 
	
	$hsot_adresi		="localhost";
	$vt_kullanici_adi 	= "root";
	$vt_sifre  			= "";
	$vt_adi 			="delinsup";
	try 
	{
		$db = new PDO("mysql:host=$hsot_adresi;dbname=$vt_adi;charset=utf8",$vt_kullanici_adi,$vt_sifre);
		//echo 'basarili';
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException 	$hata)
	{
		echo 'hata'."<br>";
		echo "aciklama : " . $hata->getMessage(); //getMessage() ile direk hatanın kaynagını basıyoruz.
		die();
		
	}

	
	

 ?>
