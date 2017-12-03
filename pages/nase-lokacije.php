<?php
	$title = 'Naše lokacije';
	$keywords = 'Naše lokacije';
	$description = 'Naše lokacije';
	include '../include/header.php';
?>

<div class="row white relative ptbk">
	<div class="pageskew"></div>
	<div class="wrapper">

		<div class="content fw">

			<div class="bread-crumbs fw">
				<ul class="fw">
					<li><a href="home.php">Početna</a></li>
					<li>Naše lokacije</li>
				</ul>
			</div><!-- end .bread-crumbs -->

			<div class="clearfix"></div>

			<h1>Naše lokacije</h1>
			<p>Aliquam dignissimos in debitis. Repudiandae eum, sint consectetur, earum sit corporis facilis dolores quo modi quia architecto similique quam omnis aut excepturi minima quis nihil accusantium pariatur quas molestiae vero rerum nam est. Adipisci rem iste quibusdam placeat tempora tenetur at ullam, ratione, in, laudantium qui laboriosam nemo atque id deserunt obcaecati quaerat autem libero sed beatae! Iste et iusto modi quia eligendi! Suscipit eos ipsum cum dolores laboriosam impedit reprehenderit quia, debitis, modi vero ab velit temporibus cumque incidunt numquam praesentium.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas reiciendis nesciunt, dolorum deserunt, itaque incidunt sint ducimus inventore cum, dolorem placeat, et aspernatur corporis totam temporibus ea maxime quidem a. Possimus reprehenderit autem totam impedit ut culpa, distinctio repudiandae saepe quasi, tempora natus ducimus deserunt iure in repellat voluptates aliquam necessitatibus sunt omnis consectetur fuga. Aliquam dignissimos in debitis. Repudiandae eum, sint consectetur, earum sit corporis facilis dolores quo modi quia architecto similique quam omnis aut excepturi minima quis nihil accusantium pariatur quas molestiae vero rerum nam est.</p>
			<p><strong>Za informacije o točnoj lokaciji kliknite na pin na karti.</strong></p>

		</div><!-- end .content -->

	</div><!-- end .wrapper -->
</div><!-- end .row -->

<div class="row lokacije">
	<div id="map3" class="map fw"></div>
</div><!-- end .lokacije -->

<?php include '../include/footer.php';?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="../js/map.js"></script>

<script type="text/javascript">
	var markers = [
		['<strong>Lokacija 1</strong><br>Kupinečka ulica bb', 45.762622,15.927846, '' , '' ,'markers'],
		['<strong>Lokacija 2</strong><br>Karlovačka cesta bb', 45.766379,15.929005, '' , '' ,'markers'],
		['<strong>Lokacija 3</strong><br>Jaruščica bb', 45.770738,15.941313, '' , '' ,'markers'],
		['<strong>Lokacija 4</strong><br>Trokut XIV bb', 45.770490,15.954210, '' , '' ,'markers'],
		['<strong>Lokacija 5</strong><br>Remetinečki gaj bb', 45.769540,15.947569, '' , '' ,'markers'],
		['<strong>Lokacija 6</strong><br>Ulica Trnsko bb', 45.775903,15.964118, '' , '' ,'markers']
	];
	initializeMaps(markers, 'map3');
</script>
