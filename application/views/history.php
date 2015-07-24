<article class="main">
	<h2 class="page_title">Article History</h2>
	<h2>January 2014</h2>
		<ul>
			<?php foreach ($entries as $entry) : ?>
			<li><a href="<?= base_url() ?>index.php/blog/view/<?= $entry->id ?>"><?=  $entry->title ?></a></li>
			<?php endforeach ?>
		</ul>

</article>




