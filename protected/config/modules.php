<?php
/**
 * Merge file module_core and module_addon
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu
 *
 */
return CMap::mergeArray(
	require(dirname(__FILE__) . '/module_core.php'),
	require(dirname(__FILE__) . '/module_addon.php')
);
?>