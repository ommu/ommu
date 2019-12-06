<?php
/**
 * Source Messages (source-message)
 * @var $this app\components\View
 * @var $this app\controllers\PhraseController
 * @var $model app\models\SourceMessage
 * @var $form app\components\widgets\ActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 6 December 2019, 10:32 WIB
 * @link https://github.com/ommu/dpadjogja-survey
 *
 */

use yii\helpers\Url;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Publication'), 'url' => ['page/admin/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phrase'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Create');
?>

<div class="source-message-create">

<?php echo $this->render('_form', [
	'model' => $model,
]); ?>

</div>
