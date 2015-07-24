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
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<header class="top">
				<a href="#">
					<div class="name"> Britt Barcroft </div>
					<div class="tagline"> {real life, real yoga} </div>
				</a>
				<img src="images/layout/yogapeople.svg" id="mainheadergraphic" alt="image of several yoga poses">
		</header>
		<nav>
		<ul>
			<li><a href="#" class="small">Home</a></li>
			<li><a href="#" class="small">Blog</a></li>
			<li><a href="#" class="large">Services</a></li>
			<li><a href="#" class="xlarge">For Organizations</a></li>
			<li><a href="#" class="small">About</a></li>
			<li><a href="#" class="large">Contact</a></li>
		</ul>
		</nav>

		<div class = "bodycontent">

			<section class = "main_column">

				<!-- Welcome article on home page -->
				<article class="main">
					<h2 class="page_title">Home</h2>
					<img src="images/content/blogthumbnail.jpg" alt="fake welcome image">
					<p>
						Lorem ipsum dolor sit amet, duo alienum nostrum no, magna recusabo sea in. 
						Quodsi verear feugiat cum te, in consulatu mnesarchum vis. Adhuc evertitur voluptaria cum ei. Mel ne essent docendi menandri, 
						vix ne exerci omittam. Partem inimicus id vis.
					</p>
					<br />
					<p>
						Nec an diceret oporteat, essent fierent ea per. Est te clita ancillae. Pro prima feugait suavitate no, cu vim nostrud facilisis. 
						Usu et alterum oporteat definitionem, stet vero nam id.
					</p>
					<br />
					<p>
						Et movet tantas habemus qui, admodum fuisset referrentur his et. 
						Eam atqui recusabo ut. Has cu option persecuti scriptorem, nostro delicata ad pri. 
						Veniam iuvaret petentium at est, mea clita scriptorem interpretaris id. 
						Usu at pericula signiferumque, brute nostrud singulis per at. 
						Cu pro graece integre admodum, no nulla torquatos percipitur vim.
					</p>
					<br />
					<p>
						Mel omnis porro concludaturque cu, 
						eu sit adhuc tibique gubergren. Sed graeci reprehendunt an. 
						Quem veniam ex duo, suavitate dissentias eos an. Eu sea offendit expetenda.
					</p>
					<br />
					<p>	
						Forensibus dissentiet consectetuer an eum, amet aliquam perfecto mei id, 
						no vix vidit summo. Sit ne unum perpetua iracundia, quis evertitur sit et. 
						Graecis detraxit an mei, harum indoctum quo ea. Ut his audire detraxit, 
						mei ea utroque explicari repudiandae, stet natum dicat ius te. In ius homero iuvaret argumentum.
					</p>
					<br />
						
				</article>
				<article>
					<h2>Blog Posts Will Go Here!</h2>
				</article>

			</section>
			<!--RIGHT COLUMN-->
			<aside>
				<section class="subscribe"> 
					<!-- subscribe box -->
					<h3 class="side_h">Get Email Updates</h3>
					<p>Sign up to receive notification when Britt posts a new article!  Your email will never be shared.</p>
					<form>
					<input type="text" name="email" value="email address" size="30">
					<input type="submit" name="subscribe" value=""><br />
					</form>
				</section>

				
				<section class="side_link">
					<!-- quickstart guide for new readers -->
						<h3 class="side_h">New reader?</h3>
						<a href="#">
							Start here with the quickstart guide. 
						</a>
				</section>	

				<section class="side_link">
					<!-- yoga beginner's guide -->
						<h3 class="side_h">Yoga 101</h3>
						<a href="#">
							What is all the hype about anyways?  A great primer for both the new and experienced. 
						</a>
				</section>

				<section class="side_link">
					<!-- Blog Roll -->
						<h3 class="side_h">Article History</h3>
						<a href="#">
							A list of all previous posts by category or date.
						</a>
				</section>
		
				<section class="connect">
					<!-- Social Media Links -->
					<h3 class="side_h">Connect:  </h3><img src="images/layout/icons.jpg" width="200" class="side_link" alt="social media link buttons">
				</section>

			</aside>

		</div>

		<div class="push"></div>
		<footer> 
			<div class="footer_box">
				<a href="#">Home</a> &nbsp; &nbsp; &nbsp;
				<a href="#">Blog</a>&nbsp; &nbsp; &nbsp;
				<a href="#">Services</a>&nbsp; &nbsp; &nbsp;
				<a href="#">For Organizations</a>&nbsp; &nbsp; &nbsp;
				<a href="#">About</a>&nbsp; &nbsp; &nbsp;
				<a href="#">Contact</a>&nbsp; &nbsp; &nbsp;
				<br />
				<br />
				<br />
			</div>
			<div class="footer_box">
				<p> 
					&copy; 
					<?php 
						date_default_timezone_set('UTC');
						echo date("Y");
					?> 
					Britt Barcroft
					&nbsp; &nbsp; &nbsp;
					<a href="#">Disclaimer/Privacy Notice</a>&nbsp; &nbsp; &nbsp;
					<a href="#">Valid CSS</a>&nbsp; &nbsp; &nbsp;
					and <a href="#">Valid HTML5</a>&nbsp; &nbsp; &nbsp;
				</p>
			</div>
		</footer>
	</body>
</html>

