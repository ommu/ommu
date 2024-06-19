<?php
/**
 * Merge file production, setting, database  and modules
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */
return CMap::mergeArray(
	require(dirname(__FILE__).'/production.php'),
	require(dirname(__FILE__).'/setting.php'),
	require(dirname(__FILE__).'/database.php'),
	require(dirname(__FILE__).'/modules.php')
);
?>