<h2 class="page_title">Article Previews</h2>

<?php foreach ($entries as $entry) : ?>

<?php $this->load->view("_blogpost", ["entry"=>$entry]) ?>

<?php endforeach ?>

