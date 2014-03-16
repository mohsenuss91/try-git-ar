<?php

/**
 * This is Documentation calss.
 *
 * @packaged default
 * @author Hachem Zerdia
 **/
class Documentation {

	private $Docs = NULL;

	public function __construct() {
		$this->Docs = array(
			'1' => '',
			'2' => ''
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
		return file_get_contents($this->Docs[$numOfChallenge]);
	}

	function __destruct() {
		$this->Docs = NULL;
	}

} // END class Documentation
