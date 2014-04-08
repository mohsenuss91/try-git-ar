<?php

    require_once 'config/config.php';

    function __autoload($className) {
        require_once CORE_APP . '/classes/' . $className . '.php';
    }
