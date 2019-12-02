<!DOCTYPE html>
<?php include 'inc/functions.php'; ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">
	<title>Random Quotes</title>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: <?php getRandomColor(); ?>;">
	<div class="container">
		<div id="quote-box">
			<?php printQuote($quotes); ?>
		</div>
		<button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
	</div>
</body>
</html>
