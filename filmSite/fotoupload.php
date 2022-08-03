<?php 
 
            if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
                $target_dir = "resimler/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $temp = explode(".", $_FILES["fileToUpload"]["name"]);
                $newfilename =  md5(round(microtime(true))) . '.' . end($temp);
// Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        //  echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "Resim dışında dosya yükleyemezsiniz.";
                        $uploadOk = 0;
                    }
                }
// Check if file already exists
                if (file_exists($target_file)) {
                    echo "Fotoğrafınız yüklenemedi lütfen daha sonra tekrar deneyiniz.";
                    $uploadOk = 0;
                }
// Check file size 3 mb
                if ($_FILES["fileToUpload"]["size"] > 3000000) {
                   echo "Dosya boyutu çok büyük";
                    $uploadOk = 0;
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    echo "Sadece JPG, JPEG, PNG & GIF formatında resim yükleyebilirsiniz.";
                    $uploadOk = 0;
                    $newfilename = "";
                }
// Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename)) {
 
                        echo "Başarıyla yüklendi";
 
                    } else {
                      echo "Bir hata oluştu lütfen tekrar deneyiniz.";
                    }
                }
 
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<main class="main_full">
    <div class="container">
        <div class="panel">
            <div class="button_outer">
                <div class="btn_upload">
                    <input type="file" id="upload_file" name="fileToUpload">
                    Upload Image
                </div>
                <div class="processing_bar"></div>
                <div class="success_box"></div>
            </div>
        </div>
        <div class="error_msg"></div>
        <div class="uploaded_file_view" id="uploaded_view">
            <span class="file_remove">X</span>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
                                    var btnUpload = $("#upload_file"),
                                        btnOuter = $(".button_outer");
                                    btnUpload.on("change", function(e){
                                        var ext = btnUpload.val().split('.').pop().toLowerCase();
                                        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
 
                                            $(".error_msg").text("Geçerli resim dosyası değil");
                                        } else {
                                            $(".error_msg").text("");
                                            btnOuter.addClass("file_uploading");
                                            setTimeout(function(){
                                                btnOuter.addClass("file_uploaded");
                                            },3000);
                                            var uploadedFile = URL.createObjectURL(e.target.files[0]);
                                            setTimeout(function(){
                                                $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
                                            },3500);
                                        }
                                    });
                                    $(".file_remove").on("click", function(e){
                                        $("#uploaded_view").removeClass("show");
                                        $("#uploaded_view").find("img").remove();
                                        btnOuter.removeClass("file_uploading");
                                        btnOuter.removeClass("file_uploaded");
                                    });
                                });
                            </script>
</body>
</html>
