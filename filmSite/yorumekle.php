<?php
session_start();

require_once 'baglanti.php';

if ($_POST) {
	

	$yorum=$_POST['yorum'];


	if($yorum!="" ){


		$sorguekle = mysqli_query($baglanti,"insert into yorumlar (yorum) values ('$yorum')");


		if ($sorguekle) {
			echo 'eklendi';
		}
		else {
			echo 'hayır';
		}

	} 
	else
	{
		alert("tüm alanları doldur");
	}



}
?>