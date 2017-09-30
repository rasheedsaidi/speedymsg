<?php
use app\models\Utility;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Rest API';
$this->params['breadcrumbs'][] = $this->title;

?>
<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>

<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><h3>API Integration</h3>
<p class="lead">
                                        As a developer, you are welcome to integrate with our SMS gateway within your various applications. 
									</p>
									<p>
									Our SMS API syntax is:<br>
									
									<p>
									http://speedysms.com.ng/index.php?r=sms/send&sender=$SenderId &user=username& password=password&type=0&to=$to&msg=$msg& profile=$profile_id
									</p>
                                    </p>
</div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><h3>Parameter List</h3>
<p class="lead">
    <table class="table table-bordered">
										<tr>
										<th>Parameter</th>
										<th>Description</th>
										</tr>
										<tr>
										<td><code>http://speedysms.com.ng/index.php?r=sms/send</code></td>
										<td>SMS API url</td>
										</tr>
										<tr>
										<td><code>sender</code></td>
										<td>The sms sender ID</td>
										</tr>
										<tr>
										<td><code>user</code></td>
										<td>Your registered username on our platform</td>
										</tr>
										<tr>
										<td><code>password</code></td>
										<td>Your registered password on our platform</td>
										</tr>
										<tr>
										<td><code>type</code></td>
										<td>The type of SMS typically = 0</td>
										</tr>
										<tr>
										<td><code>to</code></td>
										<td>The mobile number receiving the message</td>
										</tr>
										<tr>
										<td><code>msg</code></td>
										<td>The message you are sending</td>
										</tr>
										<tr>
										<td><code>profile</code></td>
										<td>The sending profile. This value will be provided to you.</td>
										</tr>
									</table>
</p>
</div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
<div class="post-body">
        <h4>Your sending profiles will show here if you've available credit to send sms.</h4>
        <?php 
        if($credit) {
        	echo '<table class="table table-bordered responsive">';
        	$i = 1;
        	
        	echo '<tr><th>#</th><th>Amount (N)</th><th>Type</th><th>Price per sms (N)</th><th>Profile ID</th></tr>';
        	foreach ($credit as $c) { 
        		//$price = (float) Utility::getUnitPrice($c->price_id);
        		$price_obj = Utility::getUserPrice($c['price_id'], $c['type']);
        	if($price_obj != null) {
				$price = $price_obj['price'];
			
        		echo '<tr><th>' . $i++ . '</th><th>' . $c['amount'] . '</th><th>' . $c['type'] . '</th><th>' . $price . '</th><th>' . $c['id'] . '</th></tr>';
        	}	 
        	}
        	echo '</table>';
        } else {
        	echo '<div class="alert alert-info">No credit found yet. Please ' . Html::a('click here', ['/site/payment']) . ' to add credit to your account</div>';
        }
        
        ?>
    </div>
</div></div></div></div>

</div>                       
                           
