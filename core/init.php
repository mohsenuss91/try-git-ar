<?php

require_once 'config/config.php';
/*
function __autoload($className) {
    require_once CORE_APP . '/classes/' . $className . '.php';
}
 */

spl_autoload_register(function ($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName = strtolower($fileName);

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require_once BASE_PATH . DIRECTORY_SEPARATOR . $fileName;
});
