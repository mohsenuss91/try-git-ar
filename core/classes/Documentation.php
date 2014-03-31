<?php

/**
 * This is Documentation calss.
 *
 * @packaged default
 * @author Hachem Zerdia
 **/
class Documentation {

    // array of files ~ paths (docs)
    // exmple :
    //    '1' => '../docs/initializing.html' 
	private $Docs = NULL;

	public function __construct() {
		$this->Docs = array(
			'1' => BASE_PATH . '/docs/initializing.html',
			'2' => BASE_PATH . ''
		);
	}

	/**
	 * This function return challenge documentation.
	 * 
	 * @param $numOfChallenge {int} challenge number.
	 * @return {string} documentation of challenge "html".
	 * @author Hachem Zerdia
	 **/
	public function getDoc($numOfChallenge) {
        if (!empty($this->Docs[$numOfChallenge]))
		    return file_get_contents($this->Docs[$numOfChallenge]);
        else
            return null;
	}

	function __destruct() {
		$this->Docs = NULL;
	}

} // END class Documentation
