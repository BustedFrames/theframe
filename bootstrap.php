<?php

define("HOME",getcwd()."/");
define("KEY", "<PRODUCT_KEY>");
define("APP_ROOT", getcwd()."/");

#define baseurl better.
if(strpos($_SERVER['HTTP_HOST'],"local")>-1)
    define("BASEURL", "http://local.ah-sooom.com/");
elseif(strpos($_SERVER['HTTP_HOST'],"jimwilliamsconsulting")>-1)
    define("BASEURL", "http://www.jimwilliamsconsulting.com/projects/ah-sooom/");

# set timezone, Mac Apache setting wasn't taking.
date_default_timezone_set("America/New_York");

require_once "system/utils.php";

require_once "ah-sooom.php";
