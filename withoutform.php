<?php
	require_once "jcryption/sqAES.php";
	require_once "jcryption/jcryption.php";
	
	/*
	echo "Data Enkripsi : ";
	echo "<pre>";print_r($_POST);echo "</pre>";
	
	JCryption::decrypt();
	
	echo "Server Terbaca : ";
	echo "<pre>";print_r($_POST);echo "</pre>";
	
	exit;
	*/
	$result=array(
		'msg' => "Tanpa Form Berhasil",
		'status' => 1
	);
	
	$datajson=json_encode($result);
	//echo "Balikkan dalam format JSON";
	//echo "<pre>".$datajson."</pre>";
	
	$encryptedjson = sqAES::crypt('KEY',$datajson);
	
	//echo "JSON Terenkripsi";
	//echo "<pre>".$encryptedjson."</pre>";
	echo $encryptedjson;
?>	
