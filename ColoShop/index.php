<?php
include('header.php');
?>

<!-- Slider -->

<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
	<div class="container fill_height">
		<div class="row align-items-center fill_height">
			<div class="col">
				<div class="main_slider_content">
					<h6>Collection from Busan T-Shirt </h6>
					<h1>Get up to 25% Off New Design from Busan T-Shirt</h1>
					<div class="red_button shop_now_button"><a href="categories.php">shop now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Banner -->

<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg)">
					<div class="banner_category">
						<a href="categories.php">women's</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/couple.jpg)">
					<div class="banner_category">
						<a href="categories.php">couple's</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
					<div class="banner_category">
						<a href="categories.php">men's</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- New Arrivals -->

<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>New Arrivals</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col text-center">
				<div class="new_arrivals_sorting">
					<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".couple">couple's</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					<!-- Product Man -->
					<?php
					$men = $db->query("SELECT * FROM kaos WHERE jenis = 'Man' AND status = 'new'");
					while ($row = $men->fetch()){
						?>
						<a href="single.php?id=<?php echo $row['id']; ?>">
							<div class="product-item men">
								<div class="product discount product_filter">
									<div class="product_image">
										<img src="images/<?php echo $row['design_kaos']; ?>.jpg" alt="">
									</div>
									<div class="favorite favorite_left"></div>
									<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo $row['status']; ?></span></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></a></h6>
										<div class="product_price"><?php echo "Rp. ".number_format($row['harga'],0,".",".").",-";
										if($row['diskon']>0)
										{
											$harga = $row['harga']-($row['harga']*$row['diskon']);
											echo "<span>".$harga."</span>"; 
										}

										?>
									</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					</a>
					<?php
				}
				?>

				<!-- Product Woman -->
				<?php
				$women = $db->query("SELECT * FROM kaos WHERE jenis = 'Woman' AND status = 'new'");
				while ($wom =$women->fetch()){
					?>
					<a href="single.php?id=<?php echo $wom['id']; ?>">
						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/<?php echo $wom['design_kaos']; ?>.jpg" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php?id=<?php echo $wom['id']; ?>"><?php echo $wom['nama']; ?></a></h6>
									<div class="product_price">
										<?php echo "Rp. ".number_format($wom['harga'],0,".",".").",-";
										if($wom['diskon']>0)
										{
											$harga = $wom['harga']-($wom['harga']*$wom['diskon']);
											echo "<span>".$harga."</span>"; 
										}

										?>
									</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					</a>
					<?php
				}
				?>
				

				<!-- Product Couple -->
				<?php
				$couple = $db->query("SELECT * FROM kaos WHERE jenis = 'Couple' AND status = 'new'");
				while ($cou = $couple->fetch()){
					?>
					<a href="single.php?id=<?php echo $cou['id']; ?>">
						<div class="product-item couple">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/<?php echo $cou['design_kaos']; ?>.jpg" alt="">
								</div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>new</span></div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php?id=<?php echo $cou['id']; ?>"><?php echo $cou['nama'];?></a></h6>
									<div class="product_price">
										<?php echo "Rp. ".number_format($cou['harga'],0,".",".").",-";
										if($cou['diskon']>0)
										{
											$harga = $cou['harga']-($cou['harga']*$cou['diskon']);
											echo "<span>".$harga."</span>"; 
										}

										?>
									</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					</a>
					<?php
				}
				?>
				

			</div>
		</div>
	</div>
</div>
</div>

<!-- Slider Navigation -->

<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
	<i class="fa fa-chevron-left" aria-hidden="true"></i>
</div>
<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
	<i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>
