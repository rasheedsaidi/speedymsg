<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Pricing';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>

<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
<p class="lead">
    SpeedySMS lets customer send premium messages at all times with speedy and highly reliable messaging gateway at comparatively cheap rates. We understand that your messages are important and urgency and need to be delivered instantly.
</p>

<p class="lead">
    With SpeedySMS, ONE(1) SMS message is equal to ONE(1) Unit of messages. <b>NO HIDDEN CHARGES</b>. We are always at your service at 24/7.
</p>

</div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><h3>Express Pricing Plan [ <?= Html::a("Order Now", "index.php?r=site/payment", ['class' => "btn btn-success"])?> ]</h3>
<p class="lead">
  <?php

  if(isset($prices) && count($prices) > 0) {

  ?>
   <table class="table table-bordered table-hover">
   <tr>
      <th colspan="3" class="tablehead">
    <h4>Price per SMS</h4>
  </th>
  </tr>
  <tr>
    <td>#</td>
    <td># of Units</td>
    <td>Price Per SMS(N)</td>
  </tr>
  <?php 
  $index = 1;
  foreach($prices as $price) {
  ?>
  <tr>
    <td><?= $index ?></td>
    <td><?= number_format($price->min_price) . ' - ' . number_format($price->max_price) ?></td>
    <td><?= '&#8358; ' . number_format($price->price, 2, '.', '') ?></td>
  </tr>
  
  <?
  $index++;
  }
  ?>
  </table>
  <?php
  } else {
    echo "<h4>Please contact us for price list</h4>";
  }
  ?>

        
</p>
</div></div></div></div>

</div>							
							