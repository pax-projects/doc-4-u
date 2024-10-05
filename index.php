<?php 

class Main {
	function render(): void {
		require_once("doc.html"); 
	}
}

$app = new Main();
$app->render();