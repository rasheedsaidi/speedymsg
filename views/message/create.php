<?php

use yii\bootstrap\Alert;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = 'Send SMS';
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">

    <h1><?= Html::encode('SMS to one number') ?></h1>
	<?php 
	if (Yii::$app->session->getFlash('smsSent') !== null) {
		echo Alert::widget([
		   'options' => ['class' => 'alert-success'],
		   'body' => Yii::$app->session->getFlash('smsSent'),
		]); 
	}
	?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
