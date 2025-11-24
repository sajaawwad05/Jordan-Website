<?php
$governorates = [
    ["name" => "Amman", "file" => "amman.php", "icon" => "icon1.png"],
    ["name" => "Zarqa", "file" => "zarqa.php", "icon" => "icon2.png"],
    ["name" => "Irbid", "file" => "irbid.php", "icon" => "icon3.png"],
    ["name" => "Balqa", "file" => "balqa.php", "icon" => "icon4.png"],
    ["name" => "Madaba", "file" => "madaba.php", "icon" => "icon1.png"],
    ["name" => "Karak", "file" => "karak.php", "icon" => "icon2.png"],
    ["name" => "Tafilah", "file" => "tafilah.php", "icon" => "icon3.png"],
    ["name" => "Ma'an", "file" => "maan.php", "icon" => "icon4.png"],
    ["name" => "Aqaba", "file" => "aqaba.php", "icon" => "icon1.png"],
    ["name" => "Jerash", "file" => "jerash.php", "icon" => "icon2.png"],
    ["name" => "Ajloun", "file" => "ajloun.php", "icon" => "icon3.png"],
    ["name" => "Mafraq", "file" => "mafraq.php", "icon" => "icon4.png"]
];
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png"> 
	<title>Jordanian Governorates</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/popup/magnific-popup.css">
	<link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

```
<section class="home-banner-area relative">
	<div class="container-fluid">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="header-right col-lg-6 col-md-6">
				<h1>The Hashemite Kingdom of Jordan</h1>
				<p class="pt-20">The Heart of the Middle East</p>
			</div>
			<div class="col-lg-6 col-md-6 header-left">
				<img class="img-fluid w-100" src="img/flagg.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<div class="popular-place-area section_gap">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-5 offset-lg-1">
				<div class="left-content" style="position:relative; top: -570px;">
					<img class="img1 img-fluid" src="img/petra.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="right-content">
					<div class="main_title">
						<h1>Popular <br>Places Around <br>Jordan</h1>    
						<p>Jordan is a country rich in history, culture, and natural beauty. From the ancient city of Petra, 
							one of the New Seven Wonders of the World, to the peaceful waters of the Dead Sea, 
							Jordan offers unforgettable destinations for every traveler. Visitors can explore the Roman ruins in Jerash,
							enjoy the vibrant streets of Amman, or experience the breathtaking desert landscapes of Wadi Rum.
							Each region of Jordan has its own unique charm, making the country a remarkable place to discover.</p>
					</div> 

					<div class="counter_area">
						<?php
						foreach(array_chunk($governorates, 2) as $row){
							echo '<div class="top-two">';
							foreach($row as $gov){
								echo '<div class="single_counter">
										<div class="thumb">
											<a href="'.$gov['file'].'" target="_blank">
												<img src="img/popular/'.$gov['icon'].'" alt="">
											</a>
										</div>
										<div class="info-content">
											<h4>'.$gov['name'].'</h4>
										</div>
									</div>';
							}
							echo '</div>';
						}
						?>
					</div> 

				</div>
			</div>
		</div>
	</div>
</div>
```

</body>
</html>
