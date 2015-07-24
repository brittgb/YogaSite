<h2 class="page_title">Admin Page</h2>
<p class="error">
	<?= (isset($message)) ? $message : "" ?>
</p>
<form action="<?= site_url('admin/insert_entry') ?>" method="post">
	Entry Title: <input type="text" name="title" size="128"><br /><br />
	Body Content: <textarea name="body"></textarea><br />
	Password: <input type="password" name="password"><br />
	<input type="submit" value="submit">
</form>
</section>
