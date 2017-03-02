<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css ">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Web Statis CodeIgniter dan Bootstrap</h1>
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		

			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Rahmadyan's Chanel</a>
					</div>
			
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url()?>/home">Home</a></li>
							<li><a href="<?php echo site_url()?>/about">About</a></li>
							<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
						
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Games Category <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">FPS</a></li>
									<li><a href="#">RPG</a></li>
									<li><a href="#">Survival</a></li>
									<li><a href="#">Strategy</a></li>
								</ul> 
							</li>
						</ul>
							<form class="navbar-form navbar-right">
        					<div class="form-group">
          						<input type="text" class="form-control" placeholder="Search">
        					</div>
        						<button type="submit" class="btn btn-primary">Submit</button>
      					</form>

					</div>
				</div>
			</nav>

 		<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class=""></li>
					<li data-target="#carousel-id" data-slide-to="3" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img src="<?php echo base_url()?>images/1.png">
						<div class="container">
							<div class="carousel-caption">
								<h1>Counter Strike Global Offensive</h1>
								<p>Counter Strike: Global Offensive adalah game dengan mode tembak-menembak orang pertama (First-Person Shooter) yang dikembangkan oleh Valve Corporation dan Hidden Path Entertainment</p>
								<p><a class="btn btn-lg btn-primary" href="http://blog.counter-strike.net/" role="button">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo base_url()?>images/3.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Overwatch</h1>
								<p>Overwatch puts players into two teams of six, with each player selecting one of several pre-defined hero characters with unique movement, attributes, and abilities; these heroes are divided into four classes: Offense, Defense, Tank and Support</p>
								<p><a class="btn btn-lg btn-primary" href="https://playoverwatch.com/en-us/" role="button">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo base_url()?>images/4.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Battlefield 1</h1>
								<p>Battlefield 1 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. It is the fifteenth installment in the Battlefield series, and the first main entry in the series since Battlefield 4.</p>
								<p><a class="btn btn-lg btn-primary" href="https://www.battlefield.com/" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img src="<?php echo base_url()?>images/5.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Watch Dogs 2</h1>
								<p>WATCH_DOGS 2 is an open world action-adventure video game developed and published by Ubisoft. The sequel to 2014's Watch Dogs, it was released worldwide for PlayStation 4, Xbox One, and Microsoft Windows in November 2016</p>
								<p><a class="btn btn-lg btn-primary" href="https://www.ubisoft.com/en-US/game/watch-dogs-2/" role="button">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<!-- ini pembatas carousel -->
			
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 align="center">Selamat datang di halaman About</h1>
			<div align="center"><img width="140" height="140" src="<?php echo base_url()?>images/aku.jpg" alt="..." class="img-circle"></div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<br>
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nama : <?php echo $nama; ?></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Nim :<?php echo $nim; ?></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Alamat : <?php echo $alamat; ?></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telpon : <?php echo $telp; ?></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Hobi :<?php echo $hoby; ?></td>
				</tr>
				<tr>
					<td> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email : <?php echo $email; ?></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Youtube : <a href="<?php echo $youtube; ?>">Klik Disini</a></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>

			
		</div>
			
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js "></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
