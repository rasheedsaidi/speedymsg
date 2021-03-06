<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

/*
Yii::$app->mailer->compose('<view_name>', <option>)
->setFrom("<from email>")
->setTo("<to email>")
->setSubject("<subject>")
// ->setHtmlBody("<b> Hello User </b>")
// ->setTextBody("Hello User")
->send();
*/
/*
$m = Yii::$app->mailer->compose()
            ->setTo('rasheedsaidi@yahoo.com')
            ->setFrom('hello@speedysms.com.ng')
            ->setSubject('Test Email')
            ->setTextBody('Hello! Welcome to SpeedySMS')
            ->send();
var_dump($m); */
/*
$mailer = Yii::$app->mailer;
        $subject = "Test email";
        $email = "rasheedsaidi@gmail.com";
        $result = $mailer->compose('signup_success')
            ->setTo($email)
            ->setSubject($subject)
            ->send();*/
?>

<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>
<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
    <h3>Office Address</h3>
<p class="lead">
    <address>
        <strong>SpeedySMS</strong><br/>
        12, Cater Street<br/>
        Ebute-Metta, <br/>
        Yaba,<br/>
        Lagos<br/>
        admin@speedysms.com.ng<br/>
        Phone : 08153505442, 08060553348
    </address>
</p>

</div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
<div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Thank you for contacting us. We will respond to you as soon as possible.
    </div>

    <?php else: ?>
                                        <div class="widget-header">
                                            <h3>Send Message</h3>
                                        </div>
                                        <div class="widget-body">
                                        
                                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                            <?= $form->errorSummary($model); ?>
                                                <p>If you have any question, feel free to message us</p>
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <input type="text" name="ContactForm[name]" value="<?= $model->name; ?>" placeholder="Name" class="form-control input-lg">
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="text" name="ContactForm[email]" value="<?php echo $model->email; ?>" placeholder="Email" class="form-control input-lg">
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="text" name="ContactForm[subject]" value="<?php echo $model->subject; ?>" placeholder="Subject" class="form-control input-lg">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <textarea name="ContactForm[body]" rows="5" placeholder="Write message here..." class="form-control input-lg"><?php echo $model->body; ?></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="btn btn-lg btn-custom pull-right">Submit</button>
                                                    </div>
                                                </div>
                                            <?php ActiveForm::end(); ?>
                                        </div>                                        
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>


</div></div></div></div>
</div>

