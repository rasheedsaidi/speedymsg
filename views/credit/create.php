<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Credit */

$this->title = 'Add Credit';
$this->params['breadcrumbs'][] = ['label' => 'Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">

    <h1><?= Html::encode("Recharge") ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
