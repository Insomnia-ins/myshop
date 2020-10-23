
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style type="text/css">
	.block{
		transition: 0.7s;
		display: none;

	}
	.block:hover{
		opacity: 0.6;
		
		
	}
	.block2{
		transition: 0.7s;
		

	}
	.block2:hover{
		opacity: 0.6;
		
		
	}
	.block1{
		transition: 0.7s;
		color: white;

	}
	.block1:hover{
		opacity: 0.6;
		background-color: white;
		color: black;
		
		
	}
	@font-face {
    font-family: fontt; /* Гарнитура шрифта */
    src: url(20011.ttf); /* Путь к файлу со шрифтом */
   }
   	p {
    font-family: fontt;
   }
   h1 {
    font-family: fontt;
   }
   h3 {
    font-family: fontt;
   }


</style>
</head>
<body>
<div class="bg col-12" style="height: 1000px;background-image: url(main.jpg); background-size: 100% 100%; background-attachment: fixed; opacity: 0.8; transition: 2s;">
	<div class=" row" style="height: 80px; opacity: 0.7; background-color: #121212">
		<div class=" col-1 mt-1 ml-4" style="height: 70px; background-image: url(logo.png);background-size: 100% 100%;"></div>
		<div class=" col-10 mt-1 ml-4  row" style="height: 80px;">
			<div class="col-6 " style="height: 80px;"></div>
			<div class=" col-1 block1" style="height: 75px; text-align: center;">
				<p class="pt-4" style="" >Главная</p>
			</div>
			<div class=" col-1 block1" style="height: 75px; text-align: center;">
				<p class="pt-4" style="" >Категории</p>
			</div>
			<div class=" col-1 block1" style="height: 75px; text-align: center;">
				<p class="pt-4" style="" >О нас</p>
			</div>
			<div class=" col-1 block1" style="height: 75px; text-align: center;">
				<p class="pt-4" style="" >FAQ</p>
			</div>
		</div>

	</div>
	<div style="background-color: ; height: 200px; width: 500px; margin-top: 18%; text-align: ; opacity: 0.7; margin-left:58%" class=" ">
		<h1 class="dobrr" style="color: white;opacity: 1;transition: 2s;  font-size: 100px;">Покоряй вершины</h1>
		<h1 class="dobr" style="color: white;opacity: 0;transition: 2s; padding-top: 40px; margin-top: 40px;">Новая колекция BURTON</h1>
		<button type="button" class="btn btn-outline-light mt-4 bt" style="color: white;opacity: 0;transition: 2s; padding-top: 20px;">Посмотреть</button>
	</div>
</div>
<hr style="width: 50%; height: 10px;">	
<div class=" pb-2 row" style="height: 1100px;">

	<div class=" col-10 mx-auto d-f " style="height: 1000px; margin-top: 2%">
		<div class="row mx-auto">
		<div class=" col-5 block2 " style="height: 600px;background-image: url(ban1.jpg); background-size: 100% 100%; margin-left: 8%">
		</div>

		<div class=" col-5 ml-4 block2" style="height: 600px;background-image: url(ban2.jpg); background-size: 100% 100%;">
		</div>
		
		
		
		
		
		<div class="  mt-4 block2" style="height: 300px;background-image: url(ban3.jpg); background-size: 100% 100%; width: 85%; margin-left: 8%; ">
		</div>
		
		</div>
	</div>

</div>


<?php

	$connect = mysqli_connect("127.0.0.1","root","","MarketAbm");

		 	
	$text_query = "SELECT * FROM products";
	$query = mysqli_query($connect, $text_query);
	$result1 = $query->fetch_assoc();
	$result2 = $query->fetch_assoc();
	$result3 = $query->fetch_assoc();
	$result4 = $query->fetch_assoc();
	$result5 = $query->fetch_assoc();
	$result6 = $query->fetch_assoc();
	$result7 = $query->fetch_assoc();
	$result8 = $query->fetch_assoc();
	$result9 = $query->fetch_assoc();
		 				
?>


<hr style="width: 50%; height: 10px;">

<div class=" pb-2  " style="text-align: center;"> 

 	<h1 class="pt-4">Популярные товары</h1>
	<div class=" col-9 mx-auto d-f " style="height:  margin-top: 5%; ">
		<div class="  mx-auto col-4" style="height: 100px; margin-top: 5%">
			<a href="admin.php"><button type="button" class="btn btn-outline-dark mt-3 col-7" style="height: 70%; ">Опубликовать</button></a>
		</div>	
	
		<div class="row mx-auto  " style="margin-top: 5%">
		
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left: 8%">
			<?php					
				echo "<img class='w-100' src=".$result1["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result1["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result1["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result1["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style="margin-left: 5%">
			<?php					
				echo "<img class='w-100' src=".$result2["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result2["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result2["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result2["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left:5%">
			<?php					
				echo "<img class='w-100' src=".$result3["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result3["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result3["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result3["price"]."</p>";
			?>
			</div>
		
		</div>
		

		</div>
		<div class="row mx-auto ">
		
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left: 8%">
			<?php					
				echo "<img class='w-100' src=".$result4["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result4["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result4["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result4["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style="margin-left: 5%">
			<?php					
				echo "<img class='w-100' src=".$result5["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result5["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result5["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result5["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left:5%">
			<?php					
				echo "<img class='w-100' src=".$result6["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result6["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result6["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result6["price"]."</p>";
			?>
			</div>
		
		</div>
		

		</div>
		<div class="row mx-auto ">
		
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left: 8%">
			<?php					
				echo "<img class='w-100' src=".$result7["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result7["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result7["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result7["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style="margin-left: 5%">
			<?php					
				echo "<img class='w-100' src=".$result8["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result8["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result8["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result8["price"]."</p>";
			?>
			</div>
		
		</div>
		<div class="shadow p-3 mb-5 bg-white rounded col-3  block " style=" margin-left:5%">
			<?php					
				echo "<img class='w-100' src=".$result9["img"].">";
			?>	
			<div class=" col-12 mt-2" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result9["title"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;">
				<?php
				echo "<p>".$result9["description"]."</p>";
			?>
			</div>
			<div class=" col-12 mt-4" style="height: 5%; text-align: center;color: #2ab863">
				<?php
				echo "<p>".$result9["price"]."</p>";
			?>
			</div>
		
		</div>
		

		</div>

	</div>

</div>
<hr style="width: 50%; height: 10px;">
<div class=" pb-2 row " style="height: 800px;"> 

	<div class="  mx-auto d-f " style="height: 800px; margin-top: 2%; width: 69%">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" class="col-12">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="c1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>

</div>
<div class=" mx-auto" style="height: 100px;background-image: url(brends.png); background-size: 100% 100%; width: 70%"></div>

</body>

	<script type="text/javascript">
		
		let txt = document.querySelector(".dobr");
		let bt = document.querySelector(".bt");
		let bg = document.querySelector(".bg");

		let bl = document.querySelectorAll(".block");
		txt.style.opacity = "1";
		txt.style.paddingTop = "0px";
		bt.style.opacity = "1";
		bt.style.paddingTop = "0px";
		bg.style.opacity = "1";

		txt.onclick = function(){

			window.location.reload();
		}

		<?php
		if ($result1["title"] != '') {

			echo "bl[0].style.display = 'block';"
			;
			;
		}
		if ($result2["title"] != '') {

			echo "bl[1].style.display = 'block';"
			;
			;
		}
		if ($result3["title"] != '') {

			echo "bl[2].style.display = 'block';"
			;
			;
		}
		if ($result4["title"] != '') {

			echo "bl[3].style.display = 'block';"
			;
			;
		}
		if ($result5["title"] != '') {

			echo "bl[4].style.display = 'block';"
			;
			;
		}
		if ($result6["title"] != '') {

			echo "bl[5].style.display = 'block';"
			;
			;
		}
		if ($result7["title"] != '') {

			echo "bl[6].style.display = 'block';"
			;
			;
		}
		if ($result7["title"] != '') {

			echo "bl[7].style.display = 'block';"
			;
			;
		}
		if ($result9["title"] != '') {

			echo "bl[8].style.display = 'block';"
			;
			;
		}
		?>
		
		
	</script>	
						
								
									
		

		


		

							
						
</html>