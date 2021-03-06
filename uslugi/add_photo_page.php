<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/favicon.png">
	<title>Maxui</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/fakeLoader.css">
	<link rel="stylesheet" href="../css/swiper.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<style type="text/css">
		body{
			  background: url("../img/svg/add_photo_job_bg.svg") 0 0/100% no-repeat;
		}
	</style>

</head>
<body>
	
	<!-- fakeloader -->
	<div class="fakeLoader"></div>
	<!-- end fakeloader -->
	
	<!-- navbar -->
	<div class="navbar">
		<div class="left">
			<a href="" class="link link-back"><i class="icon ion-ios-arrow-back"></i></a>
		</div>
		<div class="title">
			
		</div>
		<div class="right">
			
		</div>
	</div>
	<!-- end navbar -->

	<!-- pages wrapper -->
	<div class="pages-wrapper whichone-city">

		<!-- separator -->
				<!-- end separator -->
				<form id="form1" runat="server" class="form-fill cityes" method="POST" action="../actions/upload_image.php" enctype="multipart/form-data">
					<div class="button-default text-center" id="upload-container">
				          <div>
				               <input id="imgUpload" type="file" name="files[]" multiple>
				               <label style="opacity: 0" for="file-input">Выберите файл</label>
				          </div>
				       <img id="upload-image" src="../img/svg/add_photo_btn.svg">
					</div>
					<div class="button-default text-center">
						<button name="submit" class="button">Продолжить</button>
					</div>
				</form>
					
					<div class="text-center text-small"><a form="form1" href="discribe_yourself.html"><p>Добавить позже</p></a></div>


			 	

		</div>
		<!-- end search bar -->
		<div class="separator-large"></div>

	</div>
	<!-- end pages wrapper -->
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/fakeLoader.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/main.js"></script>
				<script>
				function readURL(input) {
     for(var i =0; i< input.files.length; i++){
         if (input.files[i]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               var img = $('<img id="dynamic" class="text-center">');
               img.attr('src', e.target.result);
               img.appendTo('#form1');  
            }
            reader.readAsDataURL(input.files[i]);
           }
        }
    }

    $("#imgUpload").change(function(){
        readURL(this);
    });
			</script>
</body>
</html>