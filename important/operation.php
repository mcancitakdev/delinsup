<?php 


include('connect.php');
include('function.php');
$query=$db->prepare("SELECT * FROM  languages WHERE active='1' ORDER BY lang_id ASC ");
$query->execute();
$lang=$query->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST['insertForm']))
{
	$addedMark='';
	$addedList='';
	
	foreach ($lang as $addla)
	{
		$arrayList=array();
		$newArray=array();
		foreach ($_POST as $postVeriable  => $value)
		{

			//We got the parameters according to the language variable.(dil değişkenine göre gelen parametreleri aldık.)
			$langCode='_'.$addla['title'];
			//We got the parameters according to the language variable.(dil değişkenine göre gelen parametreleri aldık.)

			$f_=strpos($postVeriable, 'f_');

			$l_=strpos($postVeriable, $langCode);//$langCode=_en,_tr...



			if($f_!==false && $l_!==false)
			{
				$veriable="$postVeriable";
				$$veriable=trim(filter_input(INPUT_POST, $veriable, FILTER_SANITIZE_STRING));
				array_push($newArray, $$veriable);

				$postVeriable=str_replace('f_', '', $postVeriable);
				$postVeriable=str_replace("$langCode",'', $postVeriable);
				//insert list(title,text1,text2,text3);
				array_push($arrayList, $postVeriable);
				
			}
		}
		$i=1;
		$addedMark='';
		$addedList='';
		foreach ($arrayList as $val)
		{
			if ($i==1)
			{
				$addedMark.="?";
				$addedList.=$val;
				
			}else
			{
				$addedMark.=",?";
				$addedList.=','.$val;
			}
			$i++;
		}

		// echo $addedMark;
		// echo $addedList;
		// exit;
		$which="inserttable_".$addla['title'];


		$query=$db->prepare("INSERT INTO $which($addedList) VALUES($addedMark)");
		if(count($newArray)>0)
		{
			for ($i=1; $i <=count($newArray); $i++) 
			{ 
				$query->bindParam($i, $newArray[$i-1], PDO::PARAM_STR);
			}
			$query->execute();
		}
		
	}
		




}
