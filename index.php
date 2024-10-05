<?php 

/**
 * @param None
 * @return void
 *
 * @author Maxence ABRILE
 * @since 2024-10-05
 * @version 1.0
*/
class Main {
	private static $file;
	private static $data;

	public function __construct() {
		self::$file = file_get_contents("doc.json");

		self::parseFile();
		self::arrangeData();
	}

	/**
	 * Parse json file
	 *
	 * @param None
	 * @return void
	 *
	 * @author Maxence ABRILE
	 * @since 2024-10-05
	 * @version 1.0
	*/
	private function parseFile(): void {
		// Check file existance
		if (!self::$file) die("Error while reading the JSON file.");

		$json_data = json_decode(self::$file, true, 512, JSON_THROW_ON_ERROR);

		// Check data inside file
		if ($json_data === null) die('Error decoding the JSON file');

		self::$data = $json_data;
	}

	/**
	 * Arrange data
	 *
	 * @param None
	 * @return void
	 *
	 * @author Maxence ABRILE
	 * @since 2024-10-05
	 * @version 1.0
	*/
	private function arrangeData(): void {

	}

	/**
	 * Display doc.html.php
	 *
	 * @param None
	 * @return void
	 *
	 * @author Maxence ABRILE
	 * @since 2024-10-05
	 * @version 1.0
	*/
	public function render(): void {
		$data = self::$data;
		$index = intval(str_replace("/", '', $_SERVER["REQUEST_URI"]));
		require_once("doc.html.php");
	}
}

$app = new Main();
$app->render();