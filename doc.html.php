<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>DOC4U</title>
</head>
<body>
	<div class="container">
		<nav>
			<h1>DOC4U</h1>
			<hr style="width: 86%">
			<div class="scrollContainerNav">

				<h4>Functions</h4>
				<ul>
					<li>
						<a>JSONFileManager.read()</a>
					</li>
					<li class="focus">
						<a>JSONFileManager.read()</a>
					</li>
					<li>
						<a>JSONFileManager.read()</a>
					</li>
					<li>
						<a>JSONFileManager.read()</a>
					</li>
					<li>
						<a>JSONFileManager.read()</a>
					</li>
				</ul>

				<hr>
				<h4>Routes</h4>
				<ul>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="focus">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>
					<li class="">
						<a>post: api/room</a>
					</li>

				</ul>
			</div>
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

			<!--JSON BODY AND REQUEST-->
			<?php foreach ($data["docs"][$index]["body"] as $content): ?>
				<h3><?= $content["title"] ?></h3>

				<!-- DISPLAY CODES -->
				<div class="preContainers">
					<?php foreach ($content["codes"] as $codeBlock): ?>
						<pre><?= $codeBlock["code"] ?><span class="preLabel"><?= $codeBlock["name"] ?></span></pre>
					<?php endforeach; ?>
				</div>

				<!-- DISPLAY CONSTRAINTS -->
				<?php foreach ($content["constraints"] as $constraint): ?>
					<div class="notify">
						<?php foreach ($constraint["text"] as $text): ?>
							<p><?= $text ?></p>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>