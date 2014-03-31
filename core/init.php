<?php

    define('BASE_PATH', realpath('./'));
    define('CORE_APP', realpath("./")."/core");

    function __autoload($className) {
        require_once CORE_APP . '/classes/' . $className . '.php';
    }
