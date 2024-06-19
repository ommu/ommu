<?php
/**
 * Database information
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */
return array(
	'components'=>array(
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=db.name',
			//'emulatePrepare' => true,
			'username' => 'db.username',
			'password' => 'db.password',
			'charset' => 'utf8',
		),
	),
);
?>