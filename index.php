<?php 

class Main {
	function render(): void {
		require_once("doc.html.php");
	}
}

$app = new Main();
$app->render();