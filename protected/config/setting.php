<?php
/**
 * Basic parameters information
 *
 * Modules:
 *	params
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */
return array(
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'support@ommu.id',
		'primaryLang' => 'id',
		'translateLangs' => array(
			'en' => 'en',
			'id' => 'id',
		),
		
		// timthumb replace url
		'timthumb_url_replace' => 0,
		'timthumb_url_replace_website' => 'http://ommu.id',	//default http
		// access system *from product
		'product_access_system' => 'ommu.id',

		// grid-view setting
		'grid-view' => array(
			'buttonImageUrl' => false,
			'JsDeleteConfirmation' => true,
			'JuiDatepicker' => true,
			'gridTemplate' => '{summary}{items}{pager}',
			'pageSize' => 50,
		),
	
		// debug parameter
		'debug' => array(
			'send_email' => array(
				'status' => true,	// boolean
				'content' => 'send_email',	// file_put_contents, send_email
				'email'	=> 'putra.sudaryanto@gmail.com',
			),
		),
	),
);
?>