<?php

    /**
     * This script run when the cercle is clicked.
     *
     * @file changeChallenge.php
     */    

    include_once 'Core/init.php';
    // num of challenge submitted.    
    $numOfChallenge = (int) $_POST['numOfChallenge'];
    
    // check if num of challenge is valid.
    if(!empty($numOfChallenge) && $numOfChallenge <= 26) { 
        // set num of challenge in the cookies.
        $expire = time() + 60 * 60 * 2; // 2h.
        setcookie('numOfChallenge',$numOfChallenge,$expire);
        
        // get document of challenge && return it as JSON object
        $doc = new \Core\Classes\Documentation();
        $docs['docOfChallenge'] = $doc->getDoc($numOfChallenge);
        echo json_encode($docs);
    }

