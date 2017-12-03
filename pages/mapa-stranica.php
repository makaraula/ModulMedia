<?php
	$title = 'Mapa stranica';
	$keywords = 'Mapa stranica';
	$description = 'Mapa stranica';
	include '../include/header.php';
?>

<div class="row white relative ptb">
	<div class="pageskew"></div>
	<div class="wrapper">

		<div class="content fw">

			<div class="bread-crumbs fw">
				<ul class="fw">
					<li><a href="home.php">Početna</a></li>
					<li>Mapa stranica</li>
				</ul>
			</div><!-- end .bread-crumbs -->

			<div class="clearfix"></div>

			<h1>Mapa stranica</h1>

			<ul class="sitemap">
				<li>
					<a href="javascript:;">Razina 1</a>
					<ul>
						<li>
							<a href="javascript:;">Razina 2</a>
							<ul>
								<li><a href="javascript:;">Razina 3</a></li>
								<li><a href="javascript:;">Razina 3</a></li>
								<li><a href="javascript:;">Razina 3</a></li>
							</ul>
						</li>
						<li><a href="javascript:;">Razina 2</a></li>
						<li><a href="javascript:;">Razina 2</a></li>
					</ul>
				</li>
				<li><a href="javascript:;">Razina 1</a></li>
				<li><a href="javascript:;">Razina 1</a></li>
				<li><a href="javascript:;">Razina 1</a></li>
				<li><a href="javascript:;">Razina 1</a></li>
				<li><a href="javascript:;">Razina 1</a></li>
				<li><a href="javascript:;">Razina 1</a></li>
			</ul><!-- end of .sitemap -->

		</div><!-- end .content -->

	</div><!-- end .wrapper -->
	<div class="pageskewbottom"></div>
</div><!-- end .row -->

<?php include '../include/footer.php';?>
