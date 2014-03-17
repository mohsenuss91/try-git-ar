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
	 * @return {array:string} challenge result && documentation.
	 * @author Hachem Zerdia
	 **/
	public function startChallenge($answer,$numOfChallenge) {
		$results = array();
        // run command and wait 
        // for resulat of command 
        $results['CommandResult'] =  $this->commandline->execCommand($answer
            ,$numOfChallenge);

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
                // if command not valid this code not exec 
                // && this code update documenation of chalange.
                $results['DocOfChallenge'] = $this->doc->getDoc(
                    $numOfChallenge + 1);
			}

        // return command result && documentation of next chalange
		return $results;
	}

	function __destruct() {
		$this->commandline = NULL;
		$this->doc = NULL;
	}

} // END class Challenge
