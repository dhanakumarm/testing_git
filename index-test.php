<?php

// testing commit 1 - from feature/test1 branch 
// testing commit 2 - from feature/test1 branch 

// testing commit 3 - from feature/test2 branch 


// testing commit 1 - from feature/test3 branch 


/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
