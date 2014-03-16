<?php

	include_once 'core/init.php';
	$challenge = new Challenge();
	$answer = $_POST['command'];
	$numOfChallenge = (int) $_COOKIE['numOfChallenge'];

	echo json_encode($challenge->startChallenge($answer,$numOfChallenge));

