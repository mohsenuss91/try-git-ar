<?php

require realpath('./') . '/core/init.php';

class TestDocumentation extends PHPUnit_Framework_TestCase {

    private $doc = NULL;

    public function setUp() {
        $this->doc = new \Core\Classes\Documentation;
    }

    // test getDoc() method.
    public function testGetDoc() {
        
        // doc is not existed.
        $this->assertNull($this->doc->getDoc(59));

        $tags = array(
            'tag'        => 'div',
            'attributes' => array('id' => 'doc-template')
        );
        
        // doc existed.
        // assert that result is an html <div id="doc-template">
        $this->assertTag($tags, $this->doc->getDoc(1));
    }

}
