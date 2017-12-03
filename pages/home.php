<?php
	$title = 'Modul Media j.d.o.o.';
	$keywords = 'Modul Media j.d.o.o.';
	$description = 'Modul Media j.d.o.o.';
	$markers = '';
	include '../include/header.php';
?>

<div class="row slider">

	<ul class="bxslider">
		<li style="background-image: url('../images/ci/slide1.jpg');">
			<div class="sgradient"></div>
			<div class="slidertxt">
				<a href="javascript:;">
					<h2>Lorem Ipsum je jednostavno probni tekst</h2>
					<p>Ovaj tekst ne samo da je preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen.</p>
				</a>
			</div><!-- end .slidertxt -->
		</li>
		<li style="background-image: url('../images/ci/slide2.jpg');">
			<div class="sgradient"></div>
		</li>
		<li style="background-image: url('../images/ci/slide3.jpg');">
			<div class="sgradient"></div>
		</li>
		<li style="background-image: url('../images/ci/slide4.jpg');">
			<div class="sgradient"></div>
		</li>
	</ul><!-- end .bxslider -->

	<div class="sliderskew"></div>

</div><!-- end .slider -->


<div class="row onama ptb40">
	<div class="wrapper">
		<div class="w5 on-txt">
			<h1>o nama</h1>
			<div class="cut pl50 fw">
				<p>Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a.</p>
			</div><!-- end .cut -->
			<a href="o-nama.php" class="pbtn">opširnije</a>
		</div><!-- end .on-txt -->
		<div class="w5 on-img pl50">
			<img src="../lib/plugins/thumb.php?src=../images/p1.png&w=505&h=305&q=80&zc=1" alt="">
		</div><!-- end .on-img -->
	</div><!-- end .wrapper -->
</div><!-- end .onama -->


<div class="row lokacije">
	<div class="mapskew"></div>
	<div id="map" class="map fw"></div>
</div><!-- end .lokacije -->

<?php include '../include/footer.php';?>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="../js/map.js"></script>

<script type="text/javascript">
	var markers = [
		['Lokacija 2', 45.762622,15.927846, '' , '' ,'markers'],
		['Lokacija 3', 45.766379,15.929005, '' , '' ,'markers'],
		['Lokacija 4', 45.770738,15.941313, '' , '' ,'markers'],
		['Lokacija 5', 45.770490,15.954210, '' , '' ,'markers'],
		['Lokacija 6', 45.769540,15.947569, '' , '' ,'markers'],
		['Lokacija 7', 45.775903,15.964118, '' , '' ,'markers']
	];
	initializeMaps(markers, 'map');
</script>
