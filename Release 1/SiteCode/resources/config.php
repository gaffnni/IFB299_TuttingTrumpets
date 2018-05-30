<?php


defined("LIBRARIES_PATH")
or define("LIBRARIES_PATH", realpath(dirname(__FILE__) . '/../resources/library'));

defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/../resources/templates'));

defined("IMAGES_PATH")
or define("IMAGES_PATH", '/img');

defined("INDEX_PATH")
or define("INDEX_PATH", '/');

defined("PROFILE_PATH")
or define("PROFILE_PATH", '/private_html');

defined("STUDENT_PATH")
or define("STUDENT_PATH", '/private_html/student');

defined("TEACHER_PATH")
or define("TEACHER_PATH", '/private_html/teacher');

defined("ADMIN_PATH")
or define("ADMIN_PATH", '/private_html/admin');

defined("STYLES_PATH")
or define("STYLES_PATH", '/css');

defined("JS_PATH")
or define("JS_PATH", '/js');

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
