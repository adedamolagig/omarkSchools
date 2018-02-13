<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset ('css/GalleryStyle.css')}}">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<style type="text/css">
		body{
			margin: 20px;
			padding: 0;
			background: #333;
		}

		.container {
			max-width: 1750px;
			margin: auto;
			border: #fff solid 3px;
			background: #333;
		}

		.main-img img, .imgs img{
			width: 100%;
		}

		.imgs {
			display:  grid;
			grid-template-columns: repeat(4, 1fr); 
			grid-gap: 10px;
		}

		.flex {
			flex: 1;
		}

		.level{ display: flex; align-items: center; }
        .flex{ flex: 1; }


	</style>
  
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-md-8 flex">
					<div class="main-img">
						<img src="images/omark_pictures/img_5149.jpg" id="current">
					</div>

					<div class="imgs">
						
						
						<img src="images/omark_pictures/img_5203.jpg">
						<img src="images/omark_pictures/img_5204.jpg">
						<img src="images/omark_pictures/img_5205.jpg">
						<img src="images/omark_pictures/img_5206.jpg">
						<img src="images/omark_pictures/img_5207.jpg">
						<img src="images/omark_pictures/img_5208.jpg">
						<img src="images/omark_pictures/img_5209.jpg">
						<img src="images/omark_pictures/img_5210.jpg">
						<img src="images/omark_pictures/img_5211.jpg">
						<img src="images/omark_pictures/img_5212.jpg">
						<img src="images/omark_pictures/img_5213.jpg">
						<img src="images/omark_pictures/img_5214.jpg">
						<img src="images/omark_pictures/img_5215.jpg">
						<img src="images/omark_pictures/img_5216.jpg">
						<img src="images/omark_pictures/img_5217.jpg">
						<img src="images/omark_pictures/img_5218.jpg">

					</div>
			</div>
			@include('layouts.gallery_navbar')
		</div>
		

	</div>



		

			

	<script src="{{asset ('js/Gallerymain.js')}}"></script>
</body>
</html>