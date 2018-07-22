<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo the_title() . '' ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="/">
			<img class="img-fluid logo" src='<?php echo get_template_directory_uri(); ?>/img/plumbers_logo.png'>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Projects
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Electrical Projects</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Plumbing Projects</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li> 
                  
                </li>
				</ul>
				<a class="nav-link" href="tel:(518) 796-2516">Call <i class="fa fa-phone" aria-hidden="true"></i> (518) 796-2516</a>
				<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary btn-blue" type="submit">Search</button>
				</form>
			</div>
		</nav>
			
	
<?php
$args = [
	'theme_location'  => 'main_menu',
	'menu_class'      => 'navbar-nav mr-auto',
	'container'       => 'ul',
];
//wp_nav_menu( $args );
?>
				
		</header>
