<?php
/**
 * Merge file module_core and module_addon
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */
return CMap::mergeArray(
	require(dirname(__FILE__) . '/module_core.php'),
	require(dirname(__FILE__) . '/module_addon.php')
);
?>