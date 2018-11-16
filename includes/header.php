<!DOCTYPE html>
<html>
<head>
	<title><?=$title ?></title>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
	<header>
		<menu>
			<?php foreach ($array as $row): ?>
				<li><a href="<?=$row['menu_link'] ?>"><?=$row['menu_name'] ?></a></li>
			<?php endforeach ?>
		</menu>
		
	</header>
