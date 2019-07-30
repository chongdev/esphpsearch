<?php
	
require_once 'app/init.php';

if( isset($_GET['q']) ){

	$q = $_GET['q'];

	$query = $es->search([
		'body' => [
			'query' => [
				'bool' => [
					'should' => [
						'match' => ['title' => $q],
						'match' => ['body' => $q],
						'match' => ['keywords' => $q],
					]
				]
			] 
		]
	]);



	// echo '<pre>', print_r($query), '</pre>';
	// die();

	if( $query['hits']['total'] >= 1){
		$results = $query['hits']['hits'];
	}
}

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

	<?php if( isset($results) ) {

		foreach ($results as $r) {
			
			?>

		<div class="result">
			<a href="<?= $r['_id'] ?>"><?=$r['_source']['title']?></a>
			<div class="result-keywords"><?= $r['_source']['keywords'] //implode(', ', $r['_source']['keywords'])?></div>
		</div>


	<?php }

	} ?>
</body>
</html>