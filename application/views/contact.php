<article class="main">
	<h2 class="page_title">Contact Britt</h2>
	<br />

	<p class="error"> <?= (isset($message)) ? $message : "" ?> </p>
	<br />
	
	<form action="<?= site_url('contact/checkpost') ?>" method="post">
		Name: <input type="text" name="name"><br /><br />
		Email: <input type="text" name="email"><br /><br  />
		Phone: (optional): <input type ="text" name="phone"><br /><br />
		I prefer to be contacted by: phone <input type="radio" name="email" value="phone">    email <input type="radio" name="email" value="phone"><br /><br />
		Message:<textarea rows="10" cols="30"></textarea><br />
		<input type="submit" value="submit">
	</form>

</article>




