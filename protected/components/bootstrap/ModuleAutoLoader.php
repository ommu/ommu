<?php
/**
 * ModuleAutoLoader
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 24 December 2017, 20:45 WIB
 * @link http://github.com/ommu/ommu
 *
 */

namespace app\components\bootstrap;

use Yii;
use yii\base\BootstrapInterface;

class ModuleAutoLoader implements BootstrapInterface
{
	const CACHE_ID = 'module_configs';

	/**
	 * Bootstrap ini akan otomatis mancari module pada folder module dan menjalankanya.
	 */
	public function bootstrap($app)
	{
		$modules = $app->cache->get(self::CACHE_ID);
		if($modules === false) {
			$modules = [];
			$modulePath = Yii::getAlias($app->params['moduleMarketplacePath']);
			foreach(scandir($modulePath) as $moduleId) {
				if($moduleId == '.' || 
					$moduleId == '..' ||
					is_file($modulePath . DIRECTORY_SEPARATOR . $moduleId) ||
					in_array($moduleId, $app->params['dontLoadModule'])) {
						continue;
				}

				$moduleDir = $modulePath . DIRECTORY_SEPARATOR . $moduleId;
				if(is_dir($moduleDir) && is_file($moduleDir . DIRECTORY_SEPARATOR . 'config.php')) {
					try {
						$modules[$moduleDir] = require($moduleDir . DIRECTORY_SEPARATOR . 'config.php');
					} catch(\Exception $ex) {
					}
				}
			}
		}

		$app->moduleManager->registerBulk($modules);
	}
}
