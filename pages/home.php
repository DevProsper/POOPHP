<?php
use App\Table\Article;
use App\Table\Categorie;  
?>
<div class="row">
	<div class="col-sm-8">
		<ul>
			<?php foreach (Article::getLast() as $post): ?>
				<h2><a href="<?= $post->getUrl() ?>"><?= $post->title; ?></a></h2>
				<p>Dans la categorie <em><b><?= $post->categorie ?></b></em></p>
				<p><?= $post->getExtrait() ?></p>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="col-sm-4">
		<h4>Listes des categories</h4>
		<ul>
			<?php foreach (Categorie::allCat() as $category): ?>
				<li><a href="<?= $category->getUrl() ?>"><?= $category->title; ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>