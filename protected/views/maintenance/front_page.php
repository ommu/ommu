<?php
/**
 * Ommu Pages (ommu-pages)
 * @var $this MaintenanceController
 * @var $model OmmuPages
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */
 
	$this->breadcrumbs=array(
		'User Verifies'=>array('manage'),
		'Create',
	);
?>

<div class="boxed">
	<?php echo $model->description->message?>
	<div class="date">
		<?php if($model->modified_date != '0000-00-00 00:00:00') {
			echo 'Edited: '.$this->dateFormat($model->modified_date).' by '.$model->modified->displayname;
		} else {
			echo $this->dateFormat($model->creation_date).' by '.$model->user->displayname;
		}?>
	<?php ;?>
	</div>
</div>