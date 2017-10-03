<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Add Contact';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['group/index']];
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">

    <h1><?= Html::encode('Add a number') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'groups' => $groups,
    ]) ?>

</div>
