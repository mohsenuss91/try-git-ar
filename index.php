<?php
	$expire = time() + 60*60*2; // 2h.
	if(!isset($_COOKIE['numOfChallenge'])) {
		setcookie('numOfChallenge',1,$expire);
	}
?>

<!doctype html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="utf-8">
	<title>Try Git</title>
	<meta name="description" content="">
	<meta name="author" content="Hachem Zerdia">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.22.0/codemirror.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="pageContent">
		<header id="header">
			<div id="logo">
				<img src="images/logo.png" >
			</div>
			<ul id="challengeStatus">
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
				<li><a href="#" > </a></li>
			</ul>
            <div id="challengeName">
            </div>
		</header>

		<div id="content">
			<div id="documentation">
                <?php include_once 'doc.php'; ?>
			</div>
			<div id="commandLine">
				<textarea name="terminal" id="terminal" dir="rtl"></textarea>
				<div id="tips">
					<div id="advice" >
					</div>
				</div>
			</div>
		</div>	
	
		<footer id="footer">
		</footer>
	</div>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.cookies.2.2.0.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.22.0/codemirror.min.js"></script>
	<script src="js/io.js"></script>
	<script src="js/scripts.js"></script>

</body
</html>
