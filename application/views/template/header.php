<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Josefin+Sans|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
		<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
		<script>
		        tinymce.init({selector:'textarea'});
		</script>
		<title>Britt Barcroft Yoga</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css" />
	</head>
	<body>
		<header class="top">
				<a href="<?= base_url() ?>">
					<div class="name"> Britt Barcroft </div>
					<div class="tagline"> {real life, real yoga} </div>
				</a>
				<img src="<?= base_url() ?>assets/images/layout/yogapeople.svg" id="mainheadergraphic" alt="image of several yoga poses">
		</header>
		<nav>
		<ul>
			<li <?php if ($this->uri->segment(1) === FALSE) {echo "class='current'";} ?>><a href="<?= base_url() ?>" class="small">Home</a></li>
			<li <?php if ($this->uri->segment(1) == "blog") {echo "class='current'";}  ?>><a href="<?= base_url() ?>index.php/blog" class="small">Blog</a></li>
			<li <?php if ($this->uri->segment(1) == "services") {echo "class='current'";} ?>><a href="<?= base_url() ?>index.php/services" class="large">Services</a></li>
			<li <?php if ($this->uri->segment(1) == "orgs") {echo "class='current'";} ?>><a href="<?= base_url() ?>index.php/orgs" class="xlarge">For Organizations</a></li>
			<li <?php if ($this->uri->segment(1) == "about") {echo "class='current'";} ?>><a href="<?= base_url() ?>index.php/about" class="small">About</a></li>
			<li <?php if ($this->uri->segment(1) == "contact") {echo "class='current'";} ?>><a href="<?= base_url() ?>index.php/contact" class="large">Contact</a></li>
		</ul>
		</nav>

		<div class = "bodycontent">

			<section class = "main_column">



