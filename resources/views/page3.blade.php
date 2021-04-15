<!DOCTYPE html>
<html>
<head>
    <title>main</title>
    <link rel="stylesheet" href="portfolio.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="portfolio.js" type="text/javascript"></script>
</head>
<body>
    <header>
		<div style="margin-left: 120px;" class="row">
    	<div style="display: flex; " class="col-sm-3">
      		<img src="https://billydec.com/assets/images/bd-share-image.jpg" width="100px"; height="70px">
      		<strong style="font-size: 50px">GROUP</strong>
    	</div>
    	<div class="col-sm-3"></div>
    	<div class="col-sm-2">
      		<p style="cursor: pointer;" onclick="document.location='{{URL::route('main', ['lang' => App::getLocale()])}}'" onmouseover="colorb(this)" onmouseout="colorc(this)">About me</p>
    	</div>
    	<div class="col-sm-2">
      		<p style="cursor: pointer;" onclick="document.location='{{URL::route('second', ['lang' => App::getLocale()])}}'" onmouseover="colorb(this)" onmouseout="colorc(this)">My achivments</p>
    	</div>
    	<div class="col-sm-2">
      		<p style="cursor: pointer;" onclick="document.location='{{URL::route('third', ['lang' => App::getLocale()])}}'" onmouseover="colorb(this)" onmouseout="colorc(this)">Contact me</p>
    	</div>
  </div>
	</header>
	<footer>
		<div class="row">
    		<div class="col-sm-4">
      			
    		</div>
    		<div id="f" class="col-sm-4">
    			<img onclick="document.location='https://vk.com/snorlaxkz'" src="https://cdn.icon-icons.com/icons2/2248/PNG/512/vk_icon_135042.png">
		<img  onclick="document.location='https://www.instagram.com/snorlax.kz/'"  src="https://www.edigitalagency.com.au/wp-content/uploads/instagram-glyph-logo-icon-png-black-white.png" height="25" width="25">
		<img onclick="document.location='https:bekturov.d767@gmail.com'" src="https://cdn.onlinewebfonts.com/svg/img_173674.png">
		<img onclick="document.location='https://t.me/snorlax767'" src="https://1.bp.blogspot.com/-1k8Pg_RTIIo/XnbC_kYemgI/AAAAAAAASdE/KIxKmoKMPQYwEtjLIGG3TaIQXqP5eiEhwCLcBGAsYHQ/s320/Telegram%2BBlack%2BWhite.png">
		<img onclick="document.location='https://github.com/bekturov/bekturov.github.io'" src="https://cdn.onlinewebfonts.com/svg/img_195128.png">
    		</div>
    		<div class="col-sm-4">
    		</div>
  		</div>
  		<p>© All rights Reserved. Bekturov Daniyar</p>
		</footer>
</body>
</html>