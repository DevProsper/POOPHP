<ul>
	<?php foreach (App\App::getDb()->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>
		<h2><a href="<?= $post->getUrl() ?>"><?= $post->title; ?></a></h2>
		<p><?= $post->getExtrait() ?></p>
	<?php endforeach ?>
</ul>