<?php

// Unit test.
require realpath('./') . '/Core/init.php';

class TestChallenge extends PHPUnit_Framework_TestCase {

    private $challenge = NULL;

    public function setUp() {
        $this->challenge = new \Core\Classes\Challenge;
    }

    // test startChallenge() method.
    public function testStartChallenge() {

        $tags = array(
            'tag'        => 'div',
            'attributes' => array('class' => 'resultOfCommand')
        );

        var_dump($this->challenge->startChallenge('git init',1));
        
        // command and num of challenge correct.
        // assert that result have an html <div class="resultOfCommand">
        $this->assertTag(
            $tags,$this->challenge->startChallenge('git init',1)['CommandResult']
        ); 

        $this->assertTag(
            $tags,$this->challenge->startChallenge('git status',2)['CommandResult']
        ); 

        $this->assertTag(
            $tags,$this->challenge->startChallenge('git status',3)['CommandResult']
        ); 

        // wrong command.
        $this->assertTag(
            $tags,$this->challenge->startChallenge('git status',1)['CommandResult']
        ); 


        $tagsDoc = array(
            'tag'        => 'div',
            'attributes' => array('id' => 'doc-template')
        );

        $this->assertTag(
            $tagsDoc,$this->challenge->startChallenge('git init',1)['DocOfChallenge']
        ); 
    }

}

