<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inruptivo</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	
	<?php wp_head(); ?>

</head>
<body>

<section class="content-general">
	

		<div class="header">
			<div class="navbar">
				<div class="container-logo">
					<div class="item-logo"><a href="index.php"><img src="images/logo.svg" alt="logo"></a></div>
				</div>
				<div class="container-menu" onclick="sidebar_open()">
					<i class="fas fa-bars"></i>
				</div>

				<!-- Sidebar -->
					<div class="container-sidebar item-bar-block" id="mySidebar">
						<div class="container-items">
						  <button onclick="sidebar_close()" class="item-bar-item item-close">
						<span><i class="fas fa-times"></i></span>
						</button>
						  <a href="#" class="item-bar-item item-button">Español<span><i class="fas fa-angle-down"></i></span></a>
						  <a href="blog.php" class="item-bar-item item-button">Blog</a>
						  <a href="about-us.php" class="item-bar-item item-button">Nosotros</a>
						  <a href="#" class="item-bar-item item-button">Pensamos</a>
						  <a href="conversemos.php" class="item-bar-item item-button">Conversemos</a>
					  </div>
					</div>
					
			</div>
		</div>