<?php
include('header.php')
?>

<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<!-- Sidebar -->

			<div class="sidebar">
				<div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Product Category</h5>
					</div>
					<ul class="sidebar_categories">
						<li><a href="#">Man</a></li>
						<li><a href="#">Woman</a></li>
						<li><a href="#">Couple</a></li>
					</ul>
				</div>

				<!-- Price Range Filtering -->
				<div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Filter by Price</h5>
					</div>
					<p>
						<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					</p>
					<div id="slider-range"></div>
					<div class="filter_button"><span>filter</span></div>
				</div>

				

				<!-- Color -->
				

			</div>

			<!-- Main Content -->

			<div class="main_content">

				<!-- Products -->

				<div class="products_iso">
					<div class="row">
						<div class="col">

							<!-- Product Sorting -->

							<div class="product_sorting_container product_sorting_container_top">
								<ul class="product_sorting">
									<li>
										<span class="type_sorting_text">Default Sorting</span>
										<i class="fa fa-angle-down"></i>
										<ul class="sorting_type">
											<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
											<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
											<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
										</ul>
									</li>
									
								</ul>
								

							</div>

							<!-- Product Grid -->

							<div class="product-grid">

								<!-- Product Man -->
								<?php
								$men = $db->query("SELECT * FROM kaos WHERE jenis = 'Man'");
								while($man = $men->fetch()){
									?>
									<a href="single.php?id=<?php echo $man['id']; ?>">
										<div class="product-item men">
											<div class="product product_filter">
												<div class="product_image">
													<img src="images/<?php echo $man['design_kaos']; ?>.jpg" alt="">
												</div>
												<div class="favorite favorite_left"></div>
											<!-- <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											--><div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?php echo $man['id']; ?>"><?php echo $man['nama']; ?></a></h6>
												<div class="product_price"><?php echo "Rp. ".number_format($man['harga'],0,".",".").",-"; ?></div>
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
							$woman = $db->query("SELECT * FROM kaos WHERE jenis = 'Woman'");
							while($wom = $woman->fetch()){
								?>
								<a href="single.php?id=<?php echo $wom['id']; ?>" method="post">
									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/<?php echo $wom['design_kaos']; ?>.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<!-- <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											--><div class="product_info">
												<h6 class="product_name" name="namabarang"><a href="single.php?id=<?php echo $wom['id']; ?>" method="post"><?php echo $wom['nama']; ?></a></h6>
												<div class="product_price" name="hargabarang"><?php echo "Rp. ".number_format($wom['harga'],0,".",".").",-"; ?></div>
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
							$couple = $db->query("SELECT * FROM kaos WHERE jenis = 'Couple'");
							while($cou =$couple ->fetch()){
								?>
								<a href="single.php?id=<?php echo $cou['id']; ?>">
									<div class="product-item couple">
										<div class="product product_filter">
											<div class="product_image">
												<input type="hidden" name="id" value="<?php echo $cou['id']; ?>"/>
												<img src="images/<?php echo $cou['design_kaos']; ?>.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?php echo $cou['id']; ?>"><?php echo $cou['nama']; ?></a></h6>
												<div class="product_price"><?php echo "Rp. ".number_format($cou['harga'],0,".",".").",-"; ?></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
										<!-- <input class="red_button add_to_cart_button"type="submit" value= "ADD TO CHART"> -->
									</div>
								</a>

								<!-- </form> -->
								<?php
							}
							?>		
							
							
						</div>
						

						<!-- Product Sorting -->

						<div class="product_sorting_container product_sorting_container_bottom clearfix">
							<ul class="product_sorting">
								<li>
									<span>Show:</span>
									<span class="num_sorting_text">04</span>
									<i class="fa fa-angle-down"></i>
									<ul class="sorting_num">
										<li class="num_sorting_btn"><span>01</span></li>
										<li class="num_sorting_btn"><span>02</span></li>
										<li class="num_sorting_btn"><span>03</span></li>
										<li class="num_sorting_btn"><span>04</span></li>
									</ul>
								</li>
							</ul>
							<span class="showing_results">Showing 1–3 of 12 results</span>
							<div class="pages d-flex flex-row align-items-center">
								<div class="page_current">
									<span>1</span>
									<ul class="page_selection">
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
									</ul>
								</div>
								<div class="page_total"><span>of</span> 3</div>
								<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Benefit -->

<div class="benefit">
	<div class="container">
		<div class="row benefit_row">
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>free shipping</h6>
						<p>Suffered Alteration in Some Form</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>transfers </h6>
						<p>fast to respons the transfer's money</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>7 days return</h6>
						<p>Making it Look Like Readable</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>opening all week</h6>
						<p>9AM - 04PM</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
					<ul class="footer_nav">

						<li><a href="contact.html">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer_nav_container">
					<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a></div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>

</body>

</html>
