<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add | ES</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<form action="add.php" method="post" autocomplete="off">
		<div class="mbl">
			<label>Title</label>
			<input type="text" name="title" autocomplete="off"> 
		</div>

		<div class="mbl">
			<label>Body</label>
			<textarea rows="5" name="body"></textarea>
		</div>

		<div class="mbl">
			<label>Keywords</label>
			<input type="text" name="keywords">
		</div>	


		<button type="submit">Add</button>
	</form>
</body>
</html>