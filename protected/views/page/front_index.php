<?php
/**
 * Ommu Pages (ommu-pages)
 * @var $this OmmuPagesController
 * @var $dataProvider CActiveDataProvider
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */

	$this->breadcrumbs=array(
		'Ommu Pages',
	);
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'application.webs.page._view',
    'pager' => array(
        'header' => '',
    ), 
    'summaryText' => '',
    'itemsCssClass' => 'items clearfix',
    'pagerCssClass'=>'pager clearfix',
)); ?>