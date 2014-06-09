<?php

namespace Core\Classes;

/**
 * This is Advice class
 *
 * @package default
 * @author John Doe
 */
class Advice {

    private $urlAdvices = NULL;

    public function __construct() {

        $this->urlAdvices = array(
            1 => array(
                '<a target="_blank" href="http://www.arabicgit.com/">Git بالعربي</a>'
            ),

            3 => array(
                '<a target="_blank" href="http://www.arabicgit.com/">3</a>'
            ),
        );
    }

    /**
     * This function return url of advices.
     *
     * @param $numOfChallenge {int} challenge number.
     * @return {array:string,false} url of advices otherwise False.
     * @author Hachem Zerdia
     **/
    public function getAdvices($numOfChallenge) {

        if($numOfChallenge > 25 || $numOfChallenge < 1)
            return false;

        if($numOfChallenge == 0)
            return $this->urlAdvices;

        return $this->urlAdvices[$numOfChallenge];
    }
}

