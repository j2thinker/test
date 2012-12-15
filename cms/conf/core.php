<?php
//timezone set
date_default_timezone_set('Asia/ShangHai');

//define separator
define(DS, DIRECTORY_SEPARATOR) ;
define(PS , PATH_SEPARATOR) ;

define(LIB_PATH  , dirname( dirname( dirname(__FILE__) ) ).DS."libs".DS );
//define framework path
define(CORE_PATH , LIB_PATH."framework".DS ) ;

//define third lib path
define(USERLIB_PATH , LIB_PATH."usefull".DS ) ;