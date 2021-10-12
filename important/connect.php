<?php 

// private $MYSQL_HOST2='ni-may.guzelhosting.com';
	// private $MYSQL_USER2='canhilal_info';
	// private $MYSQL_PASS2='Rir.1973@burki';
	// private $MYSQL_DB2='canhilal_love';
	// //private $MYSQL_DB2='panel';
	// private $CHARSET2='UTF8';
	// private $COLLATION2='utf8_general_ci';
	// private $pdo2=null;
	// private $stmt2=null;
	/*
	//kısaltmalar
	$vt=veritabani 
	*/
	// $hsot_adresi		="ni-may.guzelhosting.com";
	// $vt_kullanici_adi 	= "canhilal_info";
	// $vt_sifre  			= "Rir.1973@canhilal";
	// $vt_adi 			= "canhilal_love";
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