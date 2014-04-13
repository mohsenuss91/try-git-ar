<?php

// Unit test.
require realpath('./') . '/Core/init.php';

class TestCommandLine extends PHPUnit_Framework_TestCase {

    private $commandLine = NULL;

    public function setUp() {
        $this->commandLine = new \Core\Classes\CommandLine;
    }

    // test execCommand() method.
    public function testExecCommand() {

        // command wrong.
        $this->assertFalse($this->commandLine->execCommand('git hlkhl',1));
        // num of challenge wrong.
        $this->assertFalse($this->commandLine->execCommand('git init',2));

        $tags = array(
            'tag'        => 'div',
            'attributes' => array('class' => 'resultOfCommand')
        );
        
        // command and num of challenge correct.
        // assert that result have an html <div class="resultOfCommand">
        $this->assertTag($tags,$this->commandLine->execCommand('git init',1)); 
    }

}

