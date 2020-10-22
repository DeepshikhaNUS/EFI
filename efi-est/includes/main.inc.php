<?php

require_once(__DIR__ . "/../conf/settings.inc.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

set_include_path(get_include_path() . ":" . __DIR__ . "/../libs" . ":" . __BASE_DIR__ . "/includes/pear" . ":" . __BASE_DIR__ . "/libs");
function __autoload($class_name) {
    if (file_exists(__DIR__ . "/../libs/" . $class_name . ".class.inc.php")) {
        require_once(__DIR__ . "/../libs/" . $class_name . '.class.inc.php');
    } else if (file_exists(__DIR__ . "/../../libs/" . $class_name . ".class.inc.php")) {
        require_once(__DIR__ . "/../../libs/" . $class_name . '.class.inc.php');
    }
}

require_once(__BASE_DIR__ . "/libs/database.class.inc.php");

date_default_timezone_set(__TIMEZONE__);
$db = new database(__MYSQL_HOST__,__MYSQL_DATABASE__,__MYSQL_USER__,__MYSQL_PASSWORD__);

if (defined("__BASE_WEB_PATH__"))
    $SiteUrlPrefix = __BASE_WEB_PATH__;
else
    $SiteUrlPrefix = "";

require_once(__BASE_DIR__ . "/includes/error_helpers.inc.php");
require_once(__DIR__ . "/../libs/est_settings.class.inc.php");

?>