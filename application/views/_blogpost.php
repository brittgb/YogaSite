<article class="blog_preview">
<h2><?= $entry->title ?></h2>
<img src="<?= base_url() ?>assets/images/content/blogthumbnail.jpg" alt="people practicing yoga in a park">
<p><?= $entry->preview ?> ... <br /></p>
<a href="<?= base_url() ?>index.php/blog/view/<?= $entry->id ?>" class="blue_button">Continue Reading...</a>
</article>
