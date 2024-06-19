<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */

	$this->breadcrumbs=array(
		'Error',
	);
?>

<h1>Error <?php echo $code; ?></h1>
<h2><?php echo CHtml::encode($message); ?></h2>
