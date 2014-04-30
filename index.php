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
<!--	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.22.0/codemirror.css">-->
	<link rel="stylesheet" href="css/cs_console.css">
	<link rel="stylesheet" href="css/codemirror-local.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="pageContent">
		<header id="header">
			<div id="logo">
				<img src="images/logo.png" >
			</div>
			<ul id="challengeStatus">
				<li><a href="javascript:;" data-num-of-challenge="1"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="2"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="3"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="4"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="5"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="6"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="7"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="8"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="9"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="10"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="11"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="12"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="13"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="14"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="15"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="16"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="17"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="18"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="19"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="20"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="21"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="22"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="23"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="24"> </a></li>
				<li><a href="javascript:;" data-num-of-challenge="25"> </a></li>
			</ul>
            <div id="challengeName">
            </div>
		</header>

		<div id="content">
			<div id="documentation">
                <?php include_once 'doc.php'; ?>
			</div>
			<div id="commandLine">
				<div name="terminal" id="terminal"></div>
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
	<script src="js/lib/jquery.cookies.2.2.0.js"></script>
<!--	<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.22.0/codemirror.min.js"></script>-->
	<script src="js/lib/cs_console.js"></script>
	<script src="js/io.js"></script>
	<script src="js/scripts.js"></script>

</body
</html>
