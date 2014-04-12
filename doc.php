<?php
    include_once 'Core/init.php';
    $doc = new \Core\Classes\Documentation;
    $numOfChallenge = (isset($_COOKIE['numOfChallenge'])) ?
        (int) $_COOKIE['numOfChallenge'] : 1;

    echo $doc->getDoc($numOfChallenge);
