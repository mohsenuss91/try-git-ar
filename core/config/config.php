<?php

/************************************************
 * Settings of translator.
 ***********************************************/
/*  Language.     */
define('LANGUAGE','ar_DZ.UTF8');                   

/*  Domain.       */
define('DOMAIN','toArabic');                       

/*  Locale path.  */
define('LOCALE_PATH',realpath('./') . '/locale');  

// Set language.
putenv('LC_ALL='.LANGUAGE);
setlocale(LC_ALL,LANGUAGE);

// Set location.
bindtextdomain(DOMAIN, LOCALE_PATH);

// Set Domain.
textdomain(DOMAIN);

/************************************************
 * Settings.
 ***********************************************/

define('BASE_PATH', realpath('./'));
define('CORE_APP', realpath("./")."/core");
