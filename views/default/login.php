<?php
use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="main">
                    <div class="row">
                        <div class="col-sm-5 login-form">
                            <div class="panel panel-default">
                                <div class="panel-intro text-center">
                                    <h1 class="logo"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h1>
                                </div>                                
                                <div class="panel-body">
                                <?php 
	if (Yii::$app->session->getFlash('loginRequired') !== null) {
		echo Alert::widget([
		   'options' => ['class' => 'alert-success'],
		   'body' => Yii::$app->session->getFlash('loginRequired'),
		]); 
	}
	?>

<?php //var_dump($model->errors);
if (!empty($model->errors)) {
	echo '<div class="alert alert-error"><ul>';
	foreach($model->errors as $errors) {
		foreach($errors as $error) {
			echo '<li>' . $error . '</li>';
		}	
	}
	echo '</ul></div>';
}
exit;
// 'class' => 'form-horizontal', 
?>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        //'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<div class="form-group">
                                            <input type="text" name="LoginForm[username]" placeholder="Username" class="form-control input-lg">
                                        </div>
    <?php //= $form->field($model, 'username')->label(false) ?>
<div class="form-group">
                                            <input type="password" name="LoginForm[password]" placeholder="Password" class="form-control input-lg">
                                        </div>
    <?php //= $form->field($model, 'password')->passwordInput()->label(false) ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-12">
            <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-custom', 'name' => 'login-button']) ?>
        </div>
    </div>
    <p class="text-center form-group" style="margin-top: 1.2em;">Don't have an account? <strong><?= Html::a("Create an account", ["/user/register"]) ?></strong></p>

    <?php ActiveForm::end(); ?>

</div></div></div></div></section>

<div id="main-container" class="hide">
            <div id="logo"></div>
            <form id="login" method="post" action="login" >
                <div class="input-area">
                    <input type="text" class="text" id="email" name="email"
                        placeholder="Enter Email" />
                </div>
                <div class="input-area">
                    <input type="password" class="text" id="password" name="password" minlength="6"
                        placeholder="Enter Your Password"/>
                </div>
                <div class="input-area">
                    <input type="checkbox" id="rememberMe" name="rememberMe" />
                    <label for="rememberMe" id="rememberMe-label">Remember Me</label>
                </div>
                <div class="input-area" style="z-index: 1">
                    <input type="submit" class="button pink" value="Sign In" id="submit-login" />
                </div>
                <p class="error hide" id="email-error">Invalid email address.</p>
                <p class="error hide" id="not-found">Unable to find user for the given email address.</p>
                <p class="error hide" id="suspended">This account has been suspended.</p>
                <p class="error hide" id="invalid-credentials">Invalid credentials.</p>
                <p class="error hide" id="beta-unapproved">This beta account is still unapproved.</p>
                <input type="hidden" value="en" id="language" />
            </form>
            <a class="page-link" href="forgot-password">forgot password?</a>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
