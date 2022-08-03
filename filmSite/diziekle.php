<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Chocolate Website">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Equiv" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/diziekle.css">
	
	<title>dizi ekle</title>

</head>

<body>

	<section class="section-book">
		
		<div class="container ">

			<div class="book">
				<form action="" class="form" method="POST" enctype="multipart/form-data" id="form" data-toggle="validator">
					<div class="form__group cf center-me">
						<h2 class="heading-secondary">
							DİZİ EKLE
						</h2>
					</div>

					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idname" name="film_adi" class="form__label">dizi adı</label>
						</div>
						<div class="col-2-of-3">
							<input type="text" id="film_adi" class="form__input" name="film_adi"  placeholder="dizi adı" required/>
						</div>
					</div>

					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idname" class="form__label">açıklama</label>
						</div>
						<div class="col-2-of-3">
							<textarea id="film_aciklama "placeholder="açıklama" name="film_aciklama" rows="4" cols="50"  class="" required>
							</textarea>
							
						</div>
					</div>

					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idselect" class="form__label">tip</label>
						</div>
						<div class="col-2-of-3">
							<select id="film_tip" name="film_tip" class="form__input" >
								<option value="film">film</option>
								<option value="dizi">dizi</option>
								
							</select>
						</div>
					</div> 
					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idselect" class="form__label">kategori</label>
						</div>
						<div class="col-2-of-3">
							<select id="film_kategori" name="film_kategori" class="form__input" >
								<option value="romantik">romantik</option>
								<option value="korku">korku</option>
								<option value="komedi">komedi</option>
							</select>
						</div>
					</div> 
					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idselect" class="form__label">süre</label>
						</div>
						<div class="col-2-of-3">
							<select id="film_sure" name="film_sure" class="form__input" >
								<option value="30 dk">30 dk</option>
								<option value="1 saat">1 saat</option>
								<option value="2 saat">2 saat</option>
							</select>
						</div>
					</div> 

					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idselect" class="form__label">kalite</label>
						</div>
						<div class="col-2-of-3">
							<select id="film_kalite" name="film_kalite" class="form__input" >
								<option value="240 p">240p</option>
								<option value="720p">720p</option>
								<option value="1080p">1080p</option>
							</select>
						</div>
					</div> 
					<div class="col-1-of-3">
						<label for="idemail" class="form__label">&nbsp; resim yükle</label>
					</div>
						
						<input type="file" id="film_img" name="film_img" >
					
					<div class="form__group cf">
						<div class="col-1-of-3">
							<label for="idemail" class="form__label">&nbsp;</label>
						</div>
						<br>
						<div class="col-2-of-3">
							<button type="submit" class="btn btn-primary" id="veriEkle">ekle</button>
							
						</div>
						
					</div>
					<p id="error_msg" style="color:red;"> </p>
				</form>
			</div>
		</div>
	</section>
	
  
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script >
		
	</script>
	<script type="text/javascript">
		$(document).ready(function()
		{

			

			$("#veriEkle").click(function(e) {

				e.preventDefault();

				let form_data = new FormData();
				let img = $("#film_img")[0].files;
				let film_adi= $("input[name='film_adi']").val();
				let film_aciklama= $("textarea[name='film_aciklama']").val();
				let film_tip= $("#film_tip option:selected").text();
				let film_kategori= $("#film_kategori option:selected").text();
				let film_sure= $("#film_sure option:selected").text();
				let film_kalite= $("#film_kalite option:selected").text(); 

				
				if (img.length>0) {
					form_data.append('film_img',img[0]);
					form_data.append('film_adi',film_adi);
					form_data.append('film_aciklama',film_aciklama);
					form_data.append('film_tip',film_tip);
					form_data.append('film_kategori',film_kategori);
					form_data.append('film_sure',film_sure);
					form_data.append('film_kalite',film_kalite);

					
					$.ajax({
						url:'ekle.php',
						type: 'post',
						data: form_data,
						contentType:false,
						processData:false,

						success: function (res) {
							const data = JSON.parse(res);

							if (data.error != 1) {
								$("#error_msg").text(data.em);
								alert("Ekleme başarılı");
								$("input[name=film_adi]").val("");
								$("textarea[name=film_aciklama]").val("");
								$("input[name=film_img]").val("");
							}
						}

					});

				}else{
					$("#error_msg").text("Lütfen tüm alanları doldurduğunuzdan emin olun !");
				}

				

			});
		});
		</script>
</body>
</html>