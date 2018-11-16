<?php

class App
{
	public $title;
	protected $reader;

	function __construct($title) {
		$this->title = $title;

		require_once $_SERVER["DOCUMENT_ROOT"]."/includes/config.php";

		try {
			$this->reader = new PDO("mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8", USER, PASSWORD);
			$this->reader->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			echo "connection is lost!";
			exit();
		}
	}
	
	public function getMenu() {
		try {
			$result = $this->reader->query("SELECT * FROM `menu`");
		}
		catch (PDOException $e) {
			echo "menu dont works";
			exit();
		}
		return $result;
	}

	public function getHeader($title, $array) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/includes/header.php";
	}

	public function getContent($page = "main.php", $result = null) {
		require_once $page;
	}

	public function getFooter() {
		require_once $_SERVER["DOCUMENT_ROOT"]."/includes/footer.php";
	}
}

?>