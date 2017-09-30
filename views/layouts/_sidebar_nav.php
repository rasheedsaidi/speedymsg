<?php use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">
                            <?php 
							if(!Yii::$app->user->isGuest) { ?>
							<div class="custom-wrapper pure-g" id="menu">
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pure-menu">
                    <a href="#" class="pure-menu-heading custom-brand">MESSAGE PORTAL</a>
                    <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pure-menu pure-menu-horizontal custom-can-transform">
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover"><a href="#" id="menuLink1" class="pure-menu-link">SEND MESSAGE</a>
                            <ul class="pure-menu-children">
                                <li class="pure-menu-item"><?=  Html::a('SEND SINGLE SMS', ['/message/create'], ['class' => 'pure-menu-link']); ?></li>
                                <li class="pure-menu-item"><?=  Html::a('SEND BULK SMS', ['/message/bulk'], ['class' => 'pure-menu-link']); ?></li>
                                <li class="pure-menu-item"><?=  Html::a('SEND GROUP SMS', ['/message/group'], ['class' => 'pure-menu-link']); ?></li>
                            </ul>
                        </li>
                        <li class="pure-menu-item"><?=  Html::a('ADDRESS BOOK', ['/addressbook/index'],  ['class' => 'pure-menu-link']); ?></li>
                        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover"><a href="#" id="menuLink1" class="pure-menu-link">REPORTS</a>
                            <ul class="pure-menu-children">
                                <li class="pure-menu-item"><?=  Html::a('CREDIT REPORTS', ['/reports/credit_statistics'], ['class' => 'pure-menu-link']); ?></li>
                                <li class="pure-menu-item"><?=  Html::a('TODAY\'s STATISTICS', ['/reports/today_statistics'], ['class' => 'pure-menu-link']); ?></li>
                                <li class="pure-menu-item"><?=  Html::a('SMS REPORTS', ['/reports/sms_statistics'], ['class' => 'pure-menu-link']); ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>			
			
			<?php 
								
							}
							?>
							