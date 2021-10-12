<?php 

function allLanguages()
{
	global $db;
	$query=$db->prepare("SELECT * FROM  languages WHERE active='1'");
	$query->execute();
	$okL=$query->fetchAll(PDO::FETCH_ASSOC);

	return $okL;
}

 ?>