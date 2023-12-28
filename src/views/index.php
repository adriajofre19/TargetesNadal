<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Voyage Slider | GSAP</title>


<meta charset="utf-8">
        
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
<link rel="stylesheet" href="style/style-header.css">
<link rel="stylesheet" href="style/style.css">


</head>
<body>

<div>
	<?php include 'header.php'; ?>
</div>


<div class="app">

	<div class="cardList">
		<button class="cardList__btn btn btn--left">
			<div class="icon">
				<svg>
					<use xlink:href="#arrow-left"></use>
				</svg>
			</div>
		</button>

		<div class="cards__wrapper">
			<div class="card current--card">
				<div class="card__image">
					<a href="index.php?r=register">
					<img src="images/imatgetp1.jpg" alt="" />
					</a>
				</div>
			</div>

			<div class="card next--card">
				<div class="card__image">
					<a href="index.php?r=register">
					<img src="images/imatgetp2.jpg" alt="" />
					</a>
				</div>
			</div>

			<div class="card previous--card">
				<div class="card__image">
					<a href="index.php?r=register">
					<img src="images/imatgetp3.jpg" alt="" />
					</a>
				</div>
			</div>
		</div>

		<button class="cardList__btn btn btn--right">
			<div class="icon">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
		</button>
	</div>

	<div class="infoList">
		<div class="info__wrapper">
			<div class="info current--info">
				<h1 class="text name">CONCURS DE</h1>
				<h4 class="text location">TARGETES DE NADAL</h4>
			</div>

			<div class="info next--info">
				<h1 class="text name">CONCURS DE</h1>
				<h4 class="text location">TARGETES DE NADAL</h4>
			</div>

			<div class="info previous--info">
				<h1 class="text name">CONCURS DE</h1>
				<h4 class="text location">TARGETES DE NADAL</h4>
			</div>
		</div>
	</div>


	<div class="app__bg">
		<div class="app__bg__image current--image">
			<img src="images/imatgetp1.jpg" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="images/imatgetp2.jpg" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="images/imatgetp3.jpg" alt="" />
		</div>
	</div>
</div>


<svg class="icons" style="display: none;">
	<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='328 112 184 256 328 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
	<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='184 112 328 256 184 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
</svg>



<a href="index.php?r=register">
<div class="boton"></div>
</a>


<!-- partial -->
  <script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
<script  src="script/script.js"></script>
<script  src="script/script-header.js"></script>

</body>
</html>
