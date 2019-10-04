<?php
	
require_once 'config.php';


class Database{

	private static $instance;

	public static function getInstance(){

		if(!isset(self::$instance)){

			try {
				self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}

		}

		return self::$instance;
	}
 	
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

	public function lastId()
	{
		
	}

}