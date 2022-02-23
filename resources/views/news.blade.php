<!DOCTYPE html>
<html>
<head>
	<title>Membuat Menu Responsive Dengan CSS Dan JQuery | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="#"><b> Paradise Art <b></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				<li><a href="products">Product <span class="sr-only">(current)</span></a></li>
					<li><a href="news">News</a></li>
					<li><a href="#">Program </a></li>
					<li><a href="#">About Us </a></li>
					<li><a href="#">Contact Us</a></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutorial <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Javascript</a></li>							
							<li><a href="#">JQuery</a></li>							
							<li><a href="#">CodeIgniter</a></li>
						</ul>
					</li> -->
				</ul>
				
				
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

    <div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Ini Adalah News</h2>
				<p>Tutorial pemrograman bahasa indonesia terlengkap di muka bumi..</p><br/><br/>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Mulai Belajar !</a></p>
			</center>
		</div>