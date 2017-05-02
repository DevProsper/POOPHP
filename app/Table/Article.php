<?php 
namespace App\Table;

class Article{

	//Retourne une variable non definie dans la class 
	public function __get($key){
		$method = 'get' .ucfirst($key);
		$this->$key = $this->method();
		return $this->$key;
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