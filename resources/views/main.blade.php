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
	<div id="me">
		<h1 class="A">My name is Bekturov Daniyar</h1>
		<h1 class="B">Welcome to my website</h1>
	</div>
	<div id="ab_me">
		<img src="https://instagram.fala6-1.fna.fbcdn.net/v/t51.2885-15/e35/127642892_438335873851722_6488506206765839748_n.jpg?_nc_ht=instagram.fala6-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=VM8HW-yAxCwAX8Y-N0R&tp=1&oh=dcd5699ec050eef14277037a1a7cfacf&oe=5FF74587">
		<div>
			<strong>Who is Bekturov Daniyar?</strong>
			<p>Bekturov Daniyar graduated <i style="color: silver">Pavlodar "Bilim-Innovation" High-School for gifted boys </i>in 2019. But, during the High-School, He did not participate on any olimpiad lesson. Despite this, now he is studying Computer Science in Suleyman Demirel University. Daniyar is working on some interesting projects and focused on broadening his knowledge in web development. Also, he very interested in basketbol, table tennis and etc. sports games.</p>
		</div>
	</div>
	<div id="about">
		<div class="row">
    		<div class="col-sm-6">
                <?php
                   echo "<p><strong>Name: </strong>Bekturov Daniyar</p>";
                   echo "<p><strong>Residence: </strong>Kazakhstan</p>";
                   echo "<p><strong>Address: </strong>Pavlodar</p>";
                ?>
    		</div>
    		<div class="col-sm-6">
            <?php
                   echo "<p><strong>Email: </strong>bekturov.d767@gamil.com</p>";
                   echo "<p><strong>Age: </strong>18</p>";
                   echo "<p><strong>Hobbies: </strong>Programming | Basketbol | Table tennis | Cooking</p>";
                ?>	
    		</div>
  		</div>
  		
	
</body>
</html>