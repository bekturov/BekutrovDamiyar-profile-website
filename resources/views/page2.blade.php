<!DOCTYPE html>
<html>
<head>
    <title>main</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <a href="{{ route('main') }}">About me</a>
    	</div>
    	<div class="col-sm-2">
      		<a href="{{ route('page2') }}">My achivments</a>
    	</div>
    	<div class="col-sm-2">
      		<a href="{{ route('page3') }}">Contact me</a>
    	</div>
  </div>
	</header>
	<strong>Language knowing:</strong>
  		<hr color= "white">
  		<p>Kazakh</p>
  		 <div class="progress border">
   		<div class="progress-bar bg-dark" style="width:80%"></div>
  		</div><br>
  		<p>Russian</p>
  		 <div class="progress border">
   		<div class="progress-bar bg-dark" style="width:85%"></div>
  		</div><br>
  		<p>English</p>
  		 <div class="progress border">
   		<div class="progress-bar bg-dark" style="width:65%"></div>
  		</div><br>
  		<p>Turkish</p>
  		 <div class="progress border">
   		<div class="progress-bar bg-dark" style="width:70%"></div>
  		</div><br>
		<p>Japan</p>
  		 <div class="progress border">
   		<div class="progress-bar bg-dark" style="width:10%"></div>
  		</div><br>
	</div>
	<div id="ach">
        <?php
        echo "<strong>My achivments</strong>";		
		echo "<hr>";
		echo "<p>Regional projects compitition: II place</p>";
		echo "<p>Regional 'KazRobotics' comptition by Lego Sumo: I place</p>";
		echo "<p>Republic 'KazRobotics' compitition by Lego Sumo: V place</p>";
        ?>
	</div>
</body>
</html>