<?php
	include "includes/config.php"; // Config file
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rootspring | Code Library</title>

	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 

	<!-- Google jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

	<!-- Functions -->
	<script src="<?php echo BASE_URL ?>js/functions.js"></script>

	<!-- Code Mirror -->
	<script src="<?php echo BASE_URL ?>js/codemirror.js"></script> 

	<!-- Code Mirror Languages -->
	<!-- TODO: Concatenate -->
	<script src="<?php echo BASE_URL ?>mode/php/php.js"></script>
	<script src="<?php echo BASE_URL ?>mode/htmlmixed/htmlmixed.js"></script>
	<script src="<?php echo BASE_URL ?>mode/xml/xml.js"></script>
	<script src="<?php echo BASE_URL ?>mode/javascript/javascript.js"></script>
	<script src="<?php echo BASE_URL ?>mode/css/css.js"></script>
	<script src="<?php echo BASE_URL ?>mode/clike/clike.js"></script>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/codemirror.css">
</head>
<body>