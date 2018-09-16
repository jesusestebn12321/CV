<?php 
/**
 * 
 */
$obj=new Plantilla();
class Plantilla{
	
	function __construct(){
		# code...
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	       
			<title> Curriculum Vitae </title>

			<link rel="shortcut icon" href="img/portafolio.ico" />

	       		<!-- Styles -->
		    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
			<link rel="stylesheet" href="./css/main.css">
			<link rel="stylesheet" href="./css/redes.css">
			<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- Scripts -->
			<script src="js/vendor/modernizr-2.8.3.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/vendor/jquery-1.11.2.min.js"></script>
		</head>
		<body>
		<header>
		    <?php include 'sidebarredes.php'; ?>
			<nav class="navbar app-navbar" style="border-radius:0px;border-bottom:5px solid rgba(0,51,108,.5);">
				<div class="container">
					<div class="navbar-header">
						<div class="row">
							<div >
								<button class="navbar-toggle" date-toggle="collapse" date-target="#menu">
									<spam class="icon-bar app-icon"></spam>
									<spam class="icon-bar app-icon"></spam>
									<spam class="icon-bar app-icon"></spam>	
								</button>
								<img class="app-img-titulo" style="margin-left: -50px;" src="img/manual.png">
								<a href="#" class="app-centrar" >Curriculum</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="app-centrar-imgP col-lg-6">
							<img class="app-imagen-personal" src="img/imgPersonal.jpg" alt="imagen personal">
						</div>
						<div class="app-centrar-nombre col-lg-6">
							<p class="app-titulo-nombre"><h3> Jesus Esteban Villalta Gonzalez</h3></p>
							<p class="app-separador"></p>
							<ul>
								<li class="list-group-item" style="padding: none;background: none;border:none;border-left: 1px solid white;border-bottom: 2px solid white"><h4>Programador <i class="fa fa-code"></i> </h4></li>
								<li class="list-group-item" style="padding: none;background: none;border:none;border-left: 1px solid white;border-bottom: 2px solid white"><h4>Diseñador Web <i class="fa fa-code"></i> </h4></li>
							</ul>
		                </div>
					</div>
				</div>
                <div>
					<div> <?php include 'slider.php'; ?>  </div>
				</div>
			</section>
			</header>
		
		<?php 
	}
	function __destruct(){
	?>

	</body>
	<footer class="app-footer">
        
		<div style="background-color: rgba(0,51,108,.5);color:white; ">
		    <div class="container">
		        <div class="row py-4 d-flex">
		          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
		            <h4 class="mb-0 app-h4">Jesus Esteban Villalta Gonzalez CV</h4>
		          </div>
		          <div class="col-md-6 col-lg-7 text-center text-md-right">
		            <a class="app-rotar" href="https://www.facebook.com/esteban.villalta.SK8" data-toggle="tooltip" data-placement="bottom" title="Facebook">
		              <i class="fa fa-facebook  mr-4" style="color:white"> </i>
		            </a>
		            <a class="app-rotar" href="https://github.com/jesusestebn12321" data-toggle="tooltip" data-placement="bottom" title="GitHub">
		              <i class="fa fa-git  mr-4" style="color:white"> </i>
		            </a>
		            <a class="app-rotar" href="https://www.linkedin.com/in/jesus-esteban-villalta-12b11915a" data-toggle="tooltip" data-placement="bottom" title="Linkedin">
		              <i class="fa fa-linkedin  mr-4" style="color:white"> </i>
		            </a>
		            <a class="app-rotar" id="id" href="https://www.instagram.com/esteban_jvg.sk8" data-toggle="tooltip" data-placement="bottom" title="Instagram">
		              <i class="fa fa-instagram " style="color:white"> </i>
		            </a>
		          </div>
		        </div>
		    </div>
		</div>
		<div class="container text-center text-md-left mt-5 " >
		    <div class="row mt-3">
		        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" ></div>
		        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4">
		          <h6 class="text-uppercase text-white">Contactos</h6>
		          <p class="app-separador"></p>
		          <p class="text-white">
		            <i class="fa fa-home mr-3"></i> Venezuela, Edo Guarico, San Juan De Los Morros.</p>
		          <p class="text-white">
		            <i class="fa fa-envelope mr-3"></i> jesusesteban12321@gmail.com</p>
		          <p class="text-white">
		            <i class="fa fa-whatsapp mr-3"></i> +58 412-480-84-94</p>
		          <p class="text-white">
		            <i class="fa fa-telegram mr-3"></i> +58 426-334-49-23</p>
		        </div>
		        <div class="col-md-3 col-lg-3 col-xl-6 mx-auto mb-md-0 mb-4" ></div>
		    </div>
		</div>
		<div class="text-center py-3" style="background: #cccc">©2018 Copyright:
		    <a href="#!"> JesusVillaltaCV</a>
		</div>
    </footer>     
		<!-- Scripts   -->
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	
</html>

		<?php 
	}




}
?>