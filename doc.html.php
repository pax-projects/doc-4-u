<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DOC4U</title>
</head>
<body>
	<nav>
		
	</nav>
	<div class="content">
		<!--MENTION-->
		<div class="mentions">
			<span>@author Mey ABRILE</span>
			<span>@since 2024-10-04</span>
			<span>@version 1.0.0</span>
		</div>

		<!--HEADER-->
		<div class="requestData">
			<h2><?= $data["docs"][$index]["header"]["title"] ?></h2>
			<span class="routeUrl"><?= $data["docs"][$index]["header"]["sub-title"] ?></span>
		</div>
		<div class="description">
			<p><?= $data["docs"][$index]["header"]["description"] ?></p>
		</div>

		<!-- CODES SECTION -->
		<?php foreach ($data["docs"][$index]["body"] as $content): ?>
			<h3><?= $content["title"] ?></h3>

			<!-- DISPLAY CODES -->
			<div class="jsonContainers">
				<?php foreach ($content["codes"] as $codeBlock): ?>
					<pre><?= $codeBlock["code"] ?><span class="preLabel"><?= $codeBlock["name"] ?></span></pre>
				<?php endforeach; ?>
			</div>

			<!-- DISPLAY CONSTRAINTS -->
			<?php foreach ($content["constraints"] as $constraint): ?>

			<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
</body>
</html>