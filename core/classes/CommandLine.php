<?php

namespace Core\Classes;

use Core\Classes\Git;

/**
 * This class simulates command line functionality.
 *
 * @packaged default
 * @author Hachem Zerdia
 **/
class CommandLine {

    private $git         = NULL;
    private $gitCommands = NULL;
    private $gitFlags    = NULL;

    public function __construct() {
        $this->git         = new Git();
        $this->gitCommands = $this->git->getGitCommands();
        $this->gitFlags    = $this->git->getGitFlags();
    }

    /**
     * This function exec command and return the result of it.
     * 
     * @param $command {string} git command like "git init".
     * @param $numOfChallenge {int} challenge number "status".
     * @return {string,bool}
     * @author Hachem Zerdia
     **/
    public function execCommand($command,$numOfChallenge) {
        // Explode command for testing.
        $commandExec = $this->explodeCommand($command);
        // Test command if it's valid.
        $isCommandValid = $this->checkCommand($commandExec,$numOfChallenge); 
        
        // If command is valid run 1 of cases below,
        // and nubmer or challenge status is into account.
        if($isCommandValid === true) {
            switch ($numOfChallenge) {
            case 1: 
                $this->updateStatus();
                return $this->git->init($numOfChallenge);
                break;
            case 2:
                $this->updateStatus();
                return $this->git->status($numOfChallenge);
                break;
            case 3:
                $this->updateStatus();
                return $this->git->status($numOfChallenge);
                break;
            case 4:
                $this->updateStatus();
                return $this->git->add($numOfChallenge);
                break;
            case 5:
                $this->updateStatus();
                return $this->git->status($numOfChallenge);
                break;
            case 6:
                $this->updateStatus();
                return $this->git->commit($numOfChallenge);
                break;
            case 7:
                $this->updateStatus();
                return $this->git->add($numOfChallenge);
                break;
            case 8:
                $this->updateStatus();
                return $this->git->commit($numOfChallenge);
                break;
            case 9:
                $this->updateStatus();
                return $this->git->log($numOfChallenge);
                break;
            case 10:
                $this->updateStatus();
                return $this->git->remote($numOfChallenge);
                break;
            case 11:
                $this->updateStatus();
                return $this->git->push($numOfChallenge);
                break;
            case 12:
                $this->updateStatus();
                return $this->git->pull($numOfChallenge);
                break;
            case 13:
                $this->updateStatus();
                return $this->git->diff($numOfChallenge);
                break;
            case 14:
                $this->updateStatus();
                return $this->git->add($numOfChallenge);
                break;
            case 15:
                $this->updateStatus();
                return $this->git->diff($numOfChallenge);
                break;
            case 16:
                $this->updateStatus();
                return $this->git->reset($numOfChallenge);
                break;
            case 17:
                $this->updateStatus();
                return $this->git->checkout($numOfChallenge);
                break;
            case 18:
                $this->updateStatus();
                return $this->git->branch($numOfChallenge);
                break;
            case 19:
                $this->updateStatus();
                return $this->git->checkout($numOfChallenge);
                break;
            case 20:
                $this->updateStatus();
                return $this->git->rm($numOfChallenge);
                break;
            case 21:
                $this->updateStatus();
                return $this->git->commit($numOfChallenge);
                break;
            case 22:
                $this->updateStatus();
                return $this->git->checkout($numOfChallenge);
                break;
            case 23:
                $this->updateStatus();
                return $this->git->merge($numOfChallenge);
                break;
            case 24:
                $this->updateStatus();
                return $this->git->branch($numOfChallenge);
                break;
            case 25:
                $this->updateStatus();
                return $this->git->push($numOfChallenge);
                break;
            }

        } else { 
            return false;
        }
    }

    /**
     * This function explode command to 3 part depending on "space
     * character".
     * 
     * @param $command {string} git command like "git init".
     * @return {array:string}
     * @author Hachem Zerdia
     **/
    private function explodeCommand($command) {
        return explode(' ',$command,3);
    }

    /**
     * This function check if command is a git command "needed".
     * 
     * @param $command {string} git command like "git init".
     * @param $numOfChallenge {int} challenge number "status".
     * @return {bool}
     * @author Hachem Zerdia
     **/
    private function checkCommand($command,$numOfChallenge) {

        $isGit = ($command[0] === 'git') ? true : false;

        $isGitCommand = ($command[1] === $this->gitCommands[$numOfChallenge])
            ? true : false;

        if(isset($command[2]))
            $isGitFlag = ($command[2] === $this->gitFlags[$numOfChallenge])
                ? true : false;
        else 
            $isGitFlag = true;


        if ($isGit && $isGitCommand && $isGitFlag)
            return true;
        else 
            return false;
    }

    /**
     * This function update challenge status.
     * 
     * @return viod
     * @author Hachem Zerdia
     **/
    private function updateStatus() {

        if(isset($_COOKIE['numOfChallenge'])) {
            $expire = (time() + 60 * 60 * 2); // 2h.
            setcookie('numOfChallenge',$_COOKIE['numOfChallenge'] + 1,$expire);
        }
    }

} // END class CommandLine
