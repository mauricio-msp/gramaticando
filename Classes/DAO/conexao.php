<?php
	
	if(file_exists("vendor/php-activerecord/php-activerecord/ActiveRecord.php")):
		require_once "vendor/php-activerecord/php-activerecord/ActiveRecord.php";
	elseif(file_exists("../vendor/php-activerecord/php-activerecord/ActiveRecord.php")):
		require_once "../vendor/php-activerecord/php-activerecord/ActiveRecord.php";
	elseif(file_exists("../../vendor/php-activerecord/php-activerecord/ActiveRecord.php")):
		require_once "../../vendor/php-activerecord/php-activerecord/ActiveRecord.php";
	endif;
	
	if(file_exists("models")):
		$model = "models";
	elseif(file_exists("../models")):
		$model = "../models";
	elseif(file_exists("../../models")):
		$model = "../../models";
	endif;
	
	$cfg = ActiveRecord\Config::instance();
 	$cfg->set_model_directory($model);
	$cfg->set_connections(array('development' =>
	  'mysql://root:@localhost/gramaticando'));
		