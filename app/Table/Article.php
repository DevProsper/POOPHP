<?php
namespace App\Table;
use App\App;

class Article extends Table{

	/*public static function getLast(){
		return App::getDb()->query("SELECT * FROM articles", __CLASS__);
	}*/

	public static function find($id){
		return self::query(" SELECT articles.id, articles.title,articles.content, categories.title
			as categorie
			FROM articles
			LEFT JOIN categories
				ON category_id = categories.id
				WHERE articles.id = ?
			",[$id], true);
	}

	public static function getLast(){
		return self::query(" SELECT articles.id, articles.title,articles.content, categories.title
			as categorie
			FROM articles
			LEFT JOIN categories
				ON category_id = categories.id
		");
	}

	public static function lastByCategory($category_id){
		return self::query(" SELECT articles.id, articles.title,articles.content, categories.title
			as categorie
			FROM articles
			LEFT JOIN categories
				ON category_id = categories.id
				WHERE category_id = ?
		", [$category_id]);
	}

	// Retourne l'url
	public function getUrl(){
		return 'index.php?p=single&id=' .$this->id;
	}

	//Retourne l'extrait du contenu
	public function getExtrait(){
		$html = '<p>' .substr($this->content, 0, 100) . '</p>';
		$html .= '<p><a href="'.$this->getURL() .'">Voir la suite</a></p>';
		return $html;
	}

}
