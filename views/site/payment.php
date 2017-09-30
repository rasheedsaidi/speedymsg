<?php
use app\models\Utility;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Payment';
$this->params['breadcrumbs'][] = $this->title;

$url = urldecode(Url::toRoute(['order_now']));
$priceList = Utility::getPriceList();
?>

<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>
<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
 <h4>Please find the information on how to buy our SMS below:</h4>
<p class="lead">
<table class="table table-bordered">
    <tr>
        <th colspan="5">Express SMS</th>
    </tr>
    <tr>
        <th>#</th>
        <th>Amount</th>
        <th>Price per SMS</th>
        <th>Number of SMS</th>
        <th>Order</th>
    </tr>
    <tr>
        <td>1</td>
        <td>&#8358; 100</td>
        <td>&#8358; <?php echo $priceList['express'][0]['amount']; ?></td>
        <td><?php echo ceil(100 / floatval($priceList['express'][0]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="100">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 100)" name="direct100">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>&#8358; 200</td>
        <td>&#8358; <?php echo $priceList['express'][0]['amount']; ?></td>
        <td><?php echo ceil(200 / floatval($priceList['express'][0]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="200">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 200)" name="direct200">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>&#8358; 500</td>
        <td>&#8358; <?php echo $priceList['express'][0]['amount']; ?></td>
        <td><?php echo ceil(500 / floatval($priceList['express'][0]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="500">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 500)" name="direct500">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>                   
    <tr>
        <td>4</td>
        <td>&#8358; 1000</td>
        <td>&#8358; <?php echo $priceList['express'][1]['amount']; ?></td>
        <td><?php echo ceil(1000 / floatval($priceList['express'][1]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="1000">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 1000)" name="direct1000">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>&#8358; 2000</td>
        <td>&#8358; <?php echo $priceList['express'][1]['amount']; ?></td>
        <td><?php echo ceil(2000 / floatval($priceList['express'][1]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="2000">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 2000)" name="direct2000">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>&#8358; 5000</td>
        <td>&#8358; <?php echo $priceList['express'][1]['amount']; ?></td>
        <td><?php echo ceil(5000 / floatval($priceList['express'][1]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="5000">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 5000)" name="direct5000">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td>7</td>
        <td>&#8358; 10000</td>
        <td>&#8358; <?php echo $priceList['express'][2]['amount']; ?></td>
        <td><?php echo ceil(10000 / floatval($priceList['express'][2]['amount'])); ?></td>
        <td>
        <?php $form = ActiveForm::begin(['action' => ['/site/order_now']]); ?>
        <input type="hidden" name="amt" value="10000">
        <input type="hidden" name="type" value="express">
        <input class="button button_filled" type="submit" value="Order Now (&#8358; 10000)" name="direct10000">
        <?php ActiveForm::end(); ?>
        </td>
    </tr>
</table>
</p>

<h5>For orders above &#8358; 10,000, please pay via Bank Deposit with account detail:</h5>
<h6>Bank Name: Access Bank</h6>
<h6>Account Name: Helloworld Technologies</h6>
<h6>Account No: 0707020231</h6>
<div>Then send the teller no and amount paid to 08153545442 or sales@helloworldng.com. You will receive a message confirming your credit activation.</div>
<div>For more information call 08153505442 (also on WhatApp), 08060553348, sales@speedysms.com.ng.</div>


</div></div></div></div>
</div>

                
   
		