<?php
use app\models\Utility;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Payment Failed';
$this->params['breadcrumbs'][] = $this->title;

$message_url = urldecode(Url::toRoute(['/message/create']));
$scratchcard_url = urldecode(Url::toRoute(['/site/scratchcard']));
$e_url = urldecode(Url::to('https://voguepay.com/pay/'));

?>
<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>
<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
 <h4>Payment options</h4>
<p class="lead">

                <h4 class="h4cap">Payment Message</h4>  
                <?php if (Yii::$app->session->hasFlash('payment_reply'))
                		echo Yii::$app->session->getFlash('payment_reply')
                ?>    
</p>
</div></div></div></div>
</div>				
					
					