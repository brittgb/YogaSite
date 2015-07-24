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
						<a href="<?= base_url() ?>index.php/quickstart">
							Start here with the quickstart guide. 
						</a>
				</section>	

				<section class="side_link">
					<!-- yoga beginner's guide -->
						<h3 class="side_h">Yoga 101</h3>
						<a href="<?= base_url() ?>index.php/yoga101">
							What is all the hype about anyways?  A great primer for both the new and experienced. 
						</a>
				</section>

				<section class="side_link">
					<!-- Blog Roll -->
						<h3 class="side_h">Article History</h3>
						<a href="<?= base_url() ?>index.php/history">
							A list of all previous posts by category or date.
						</a>
				</section>
		
				<section class="connect">
					<!-- Social Media Links -->
					<h3 class="side_h">Connect:  </h3><img src="<?= base_url() ?>assets/images/layout/icons.jpg" width="200" class="side_link" alt="social media link buttons">
				</section>

			</aside>

		</div>

		<div class="push"></div>
		<footer> 
			<div class="footer_box">
				<a href="<?= base_url() ?>">Home</a> &nbsp; &nbsp; &nbsp;
				<a href="<?= base_url() ?>index.php/blog">Blog</a>&nbsp; &nbsp; &nbsp;
				<a href="<?= base_url() ?>index.php/services">Services</a>&nbsp; &nbsp; &nbsp;
				<a href="<?= base_url() ?>index.php/orgs">For Organizations</a>&nbsp; &nbsp; &nbsp;
				<a href="<?= base_url() ?>index.php/about">About</a>&nbsp; &nbsp; &nbsp;
				<a href="<?= base_url() ?>index.php/contact">Contact</a>&nbsp; &nbsp; &nbsp;
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
					<a href="<?= base_url() ?>index.php/disclaimer">Disclaimer/Privacy Notice</a>&nbsp; &nbsp; &nbsp;
					<a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>&nbsp; &nbsp; &nbsp;
					and <a href="http://validator.w3.org/check/referer">Valid HTML5</a>&nbsp; &nbsp; &nbsp;
				</p>
			</div>
		</footer>
	</body>
</html>

