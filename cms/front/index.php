<?php
//include the core configure file
require_once (dirname(dirname(__FILE__)) . "/conf/core.php");

//include web configure file
require_once dirname(__FILE__) .DS."protected".DS."config".DS."webconf.php" ;

//require yii base 
require_once (CORE_PATH . "yii.php");

//require usefull functions
require_once (USERLIB_PATH . "functions.php");

//set alias for some usefull path when needed
//Yii::setPathOfAlias($alias, $path) ;

Yii::createWebApplication($environment->getConfig())->run();