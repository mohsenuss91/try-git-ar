<?php
    include_once 'core/init.php';
    $doc = new Documentation();
    $numOfChallenge = (isset($_COOKIE['numOfChallenge'])) ?
        (int) $_COOKIE['numOfChallenge'] : 1;

    echo $doc->getDoc($numOfChallenge);
