<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search | ES</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<form method="get" action="index.php" autocomplete="off">
		<div class="mbl">
			<label>Search for something</label>
			<input type="text" name="q" autocomplete="off">
		</div>
		
		<button type="submit">Search</button>
	</form>

	<div class="results"></div>
</body>
</html>