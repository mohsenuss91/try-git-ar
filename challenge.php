<?php

    include_once 'core/init.php';

    // create challenge object.
    $challenge = new Challenge();

    // command submitted by user.
    $answer = $_POST['command'];

    // get number or challenge status from cookies.
    $numOfChallenge = (int) $_COOKIE['numOfChallenge'];
    
    // run challage && print result (json format). 
    echo json_encode($challenge->startChallenge($answer,$numOfChallenge));

