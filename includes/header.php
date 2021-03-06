<?php require('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Caerus Education <?php get_title();?></title>
        <meta name="description" content="">
		<meta name="keywords" content="">
		<meta property="og:description" content="">
		<meta property="og:site_name" content="Caerus Educational Services">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
		<link href="<?php get_path();?>css/master.css" rel="stylesheet">
		<link href="<?php get_path();?>images/favicon.png" rel="icon" type="image/png" >
	</head>
	<body>
		<div id="header-wrap" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1 id="site-title"><a href="<?php get_url('index');?>">Caerus Education</a></h1>
					</div>
					<div class="col-md-3">
						<div class="row contact-options">
							<div class="col-md-6 u-centered">Contact us</div>
							<div class="col-md-2 social-icon u-centered"><a href="mailto:info@caerus.ie" tabindex="8"><span class="fa fa-envelope"></span></a></div>
							<div class="col-md-2 social-icon u-centered"><a href="https://twitter.com/caeruseducation" target="_blank" tabindex="9"><span class="fa fa-twitter"></span></a></div>
							<div class="col-md-2 social-icon u-centered"><a href="http://ie.linkedin.com/in/alisonatcaeruseducation" target="_blank" tabindex="10"><span class="fa fa-linkedin"></span></a></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="nav-container">
						<nav role="navigation">
							<ul class="site-menu">
								<li class="site-menu-item <?php get_current('index');		?>"><a href="<?php get_url('index');		?>index.php" tabindex="1">Home</a></li>
								<li class="site-menu-item <?php get_current('about');		?>"><a href="<?php get_url('about');		?>about.php" tabindex="2">About Us</a></li>
								<li class="site-menu-item <?php get_current('families');	?>"><a href="<?php get_url('families');		?>families.php" tabindex="3">Families</a></li>
								<li class="site-menu-item <?php get_current('schools');		?>"><a href="<?php get_url('schools');		?>schools.php" tabindex="4">Schools</a></li>
								<li class="site-menu-item <?php get_current('workplace');	?>"><a href="<?php get_url('workplace');	?>workplace.php" tabindex="5">Workplace</a></li>
								<li class="site-menu-item <?php get_current('publications');?>"><a href="<?php get_url('publications');	?>publications.php" tabindex="6">Publications</a></li>
								<li class="site-menu-item <?php get_current('contact');		?>"><a href="<?php get_url('contact');		?>contact.php" tabindex="7">Contact</a></li>
							</ul>
						</nav>
					</div>
					
				</div>
			</div>
			<!-- end container -->
			<div class="break">
				
			</div>
		</div>
		<!-- end header -->