<?php
	
require_once 'app/init.php';

if( !empty($_POST) ){

	if( isset($_POST['title'], $_POST['body'], $_POST['keywords']) ){

		$title = $_POST['title'];
		$body = $_POST['body'];
		$keywords = $_POST['keywords'];

		$indexed = $es->index([
			'index' => 'articles',
			'type' => 'article',
			'body' => [
				'title' => $title,
				'body' => $body,
				'keywords' => $keywords
			]
		]);


		if( $indexed ){
			print_r($indexed);
		}

		
	}
}

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