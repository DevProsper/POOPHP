<?php
namespace App;

class App{

	const DB_NAME = 'poo';
	const DB_USER = 'root';
	const DB_HOST = 'localhost';
	const DB_PASS = '';
	private static $database;
	private static $title = 'Mon super titre';

	public static function getDb(){
		if (self::$database === null) {
			self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
		}
		return self::$database;
	}

	public static function notFound(){
		header("Http/1.0 404 not found");
		header("Location:index.php?p=404");
	}

	public static function getTitle(){
		return self::$title;
	}

	public static function setTitle($title){
		return self::$title = $title;
	}
}