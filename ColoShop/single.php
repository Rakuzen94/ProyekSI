<?php
include('header.php');
$idkaos = $_GET['id'];
$query = mysql_query("SELECT * FROM kaos where id ='$idkaos'");
$warna = mysql_query("SELECT * FROM warna");
$detail = mysql_fetch_array($query);
echo mysql_error();

?>

<div class="container single_product_container">
	<div class="row">
		<div class="col">

		</div>
	</div>

	<div class="row">
		<div class="col-lg-7">
			<div class="single_product_pics">
				<div class="row">
					<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
						<div class="single_product_thumbnails">
							<ul>

								<li class="active"><img src="images/<?php echo $detail['design_kaos']; ?>.jpg" alt="" data-image="images/<?php echo $detail['design_kaos']; ?>.jpg"></li>
									<!-- <li><img src="images/<?php echo $detail['design_kaos2']; ?>.jpg" alt="" data-image="images/<?php echo $detail['design_kaos2']; ?>.jpg"></li>
										<li><img src="images/<?php echo $detail['design_kaos3']; ?>.jpg" alt="" data-image="images/<?php echo $detail['design_kaos3']; ?>.jpg"></li> -->
									</ul>
								</div>
							</div>
							<div class="col-lg-9 image_col order-lg-2 order-1">
								<div class="single_product_image">
									<div class="single_product_image_background" style="background-image:url(images/<?php echo $detail['design_kaos']; ?>.jpg)"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="product_details">
						<div class="product_details_title">
							<h2><?php echo $detail['nama']; ?></h2>
							<p>Harusnya ini keterangan <?php echo $detail['detail']; ?></p>
							<p><?php echo $detail['nama'];?></p> 
						</div>
					<!-- <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>free delivery</span>
					</div> -->
					<?php
					if($detail['diskon']>0){
						?>
						<div class="original_price"><?php echo "Rp. ".number_format($detail['harga'],0,".",".").",-"; ?></div>
						<div class="product_price"><?php echo "Rp. ".number_format($detail['harga']-($detail['diskon']*$detail[harga])); ?></div>
						<?php
						
					}else{
						echo '<div class="product_price">Rp.'.number_format($detail['harga'],0,".",".").",-</div>";
					}
					?>
					<!-- <div class="original_price">$629.99</div> -->
					
					<div class="product_color">
						<span>Daftar Warna:</span>
						<ul>
							<?php
							
							while($arr = mysql_fetch_array($warna)){
								echo '<li>'.$arr['warna'].'</li>';
							}
							?>
							
						</ul>
						
					</div>
					<br>
					<br>
					
					<button  type="submit" class="newsletter_submit_btn trans_300" value="Submit"><a href="#">ADD TO CHART</a></button>
					
					
				</div>
			</div>
		</div>

	</div>


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
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
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
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
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
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
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
<script src="js/single_custom.js"></script>
</body>

</html>
