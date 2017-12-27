<?php
include('header.php');
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "3190211334-nc9bbw6b6ixv8pd3D6bTs9wO8LwJYDPiJjTMKio",		//OAuth utk oauth_acces_token
    'oauth_access_token_secret' => "qXtzHxQ9Q20r7F2LmZAzMavElUIYomqdUZyt1SkgwU4Tz",		//OAuth oauth_access_token_secret
    'consumer_key' => "nwNXMlRrKolNGDfb7OAECixJy",										//OAuth consumer_key
    'consumer_secret' => "FECaRgsBEc6aKZZ8TfssfQbO6vbdQo2tRvoA68WwLMop5vnIaI"
);

	//$keyword = $_POST['kyword'];

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23busanshirt'.$_POST['keyword'].'&result_type=recent&count=200';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$result = $twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest();

$result = json_decode($result);

?>
<!doctype html>

<div class="container product_section_container">

	<H3 style="font-size:25px"><b>TESTIMONI</b></H3>
	<div class="row">
		<div class="col-md-7">
			
			<?php
			foreach ($result->statuses as $key) {
				
				if($key->text){
					echo '<div class="card-header" align="right"></div>
					<div class="card-block"><img src="'.$key->user->profile_image_url .'">'.'&nbsp<b>'.$key->user->screen_name .'</b><br><i>'. $key->text .'</i>
					</div><hr>';
					
				}
			} ?>
			
		</div>

		<div class="col-md-5">
			<img class="img img-responsive" height="450px" width="450px" src="img/p3.png"/>	
		</div>
	</div>

</div>



<?php 
include('footer.php');
?>


</body>

</html>
