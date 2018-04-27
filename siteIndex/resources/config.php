<?php


defined("LIBRARIES_PATH")
    or define("LIBRARIES_PATH", realpath(dirname(__FILE__) . '/../resources/library'));

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/../resources/templates'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
