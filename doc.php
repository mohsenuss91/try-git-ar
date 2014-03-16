<?php
    include_once 'core/init.php';
    $doc = new Documentation();
    $numOfChallenge = (int) $_COOKIE['numOfChallenge'];

    echo $doc->getDoc($numOfChallenge);
