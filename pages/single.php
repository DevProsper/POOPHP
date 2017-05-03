<?php
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if ($post === false) {
	App::notFound();
}
App::setTitle('Ma single page');
?>

<h1><?= $post->title; ?></h1>
<p><em><?= $post->title; ?></em></p>
<p><?= $post->content; ?></p>