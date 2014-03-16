<?php

/**
 * This is Challenge class. 
 *
 * @packaged default
 * @author Hachem Zerdia
 **/
class Challenge {
	private $commandline = NULL;
	private $doc = NULL;

	public function __construct() {
		$this->commandline = new CommandLine();
		$this->doc = new Documentation();
	}

	/**
	 * This function return the result of challenge started.
	 *
	 * @param $answer {string} it's a command submited by user.
	 * @param $numOfChallenge {int} challenge number.
	 * @return {string} challenge result.
	 * @author Hachem Zerdia
	 **/
	public function startChallenge($answer,$numOfChallenge) {
		$results = array();
		$results['CommandResult'] =  $this->commandline->execCommand($answer,$numOfChallenge);
			if($results['CommandResult'] === false) {
			    $results['CommandResult'] = '
						<div class="resultOfCommand">
							<p>
								<span style="color:#F00;">
									Please, follow challenge steps. <br/>
									Or	<br/>
									Command submitted is wrong.
								</span>
							</p>
						</div>	
					';
			} else {
			    $results['DocOfChallenge'] = $this->doc->getDoc($numOfChallenge + 1);
			}

		return $results;
	}

	function __destruct() {
		$this->commandline = NULL;
		$this->doc = NULL;
	}

} // END class Challenge
