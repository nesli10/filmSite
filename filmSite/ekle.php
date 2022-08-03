<?php


if (isset($_FILES['film_img']) && isset($_POST['film_adi']) && isset($_POST['film_aciklama'])
&& isset($_POST['film_kategori']) && isset($_POST['film_sure']) && isset($_POST['film_tip']) 
&& isset($_POST['film_kalite'])) {
	
	include "baglanti.php";
	$img_name = $_FILES['film_img']['name'];
	$img_size = $_FILES['film_img']['size'];
	$tmp_name = $_FILES['film_img']['tmp_name'];
	$error 	  = $_FILES['film_img']['error'];

	$film_adi=$_POST['film_adi'];
	$film_aciklama=$_POST['film_aciklama'];
	$film_kategori=$_POST['film_kategori'];
	$film_sure=$_POST['film_sure'];
	$film_tip=$_POST['film_tip'];
	$film_kalite=$_POST['film_kalite'];

	if ($error === 0) {

		if ($img_size > 1000000) {
			$em= "Buyuk Dosya Boyutu";
			$error = array('error' => 1, 'em' => $em );


			echo json_encode($error);
			exit(); 
		}else{
			$img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
			
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg","jpeg","png");
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;

				$img_upload_path="img/".$new_img_name;

				move_uploaded_file($tmp_name, $img_upload_path);
				


				if($film_adi!="" and $film_aciklama!="" and $film_kategori!="" and $film_tip!="" and $film_sure!="" and $film_kalite!=""){
				$sql =mysqli_query($baglanti,"insert into filmler (film_adi,film_aciklama,film_kategori,film_img,film_sure,film_tip,film_kalite) values ('$film_adi','$film_aciklama','$film_kategori','$new_img_name','$film_sure','$film_tip','$film_kalite')");;
				
				}
				$res = array('error' => 0, 'src' => $new_img_name );
				echo json_encode($res);
				exit(); 
			}
			else{
				$em= "Uygun dosya uzantisi değil";
				$error = array('error' => 1, 'em' => $em );


				echo json_encode($error);
				exit(); 
			}
		}
		// code...
	}else{
		$em= "bilinmeyen hata oluştu";
		$error = array('error' => 1, 'em' => $em );


		echo json_encode($error);
		exit();
	}
	//$film_adi=$_POST['film_adi'];
	//$film_aciklama=$_POST['film_aciklama'];
	//$film_kategori=$_POST['film_kategori'];
	//$film_img=$_POST['film_img'];
	//$film_sure=$_POST['film_sure'];
	//$film_tip=$_POST['film_tip'];
	//$film_kalite=$_POST['film_kalite'];


	//if($film_adi!="" and $film_aciklama!="" and $film_kategori!="" and $film_tip!="" and $film_sure!="" and $film_kalite!="" and $film_img!=""){

		


		//$sorguekle = mysqli_query($baglanti,"insert into filmler (film_adi,film_aciklama,film_kategori,film_img,film_sure,film_tip,film_kalite) values ('$film_adi','$film_aciklama','$film_kategori','$film_img','$film_sure','$film_tip','$film_kalite')");


		//if ($sorguekle) {
		//	echo 'eklendi';
		//}
		//else {
		//	echo 'hayır';
		//}

	//} 
	//else
	//{
	//	alert("tüm alanları doldur");
	//}



}
?>