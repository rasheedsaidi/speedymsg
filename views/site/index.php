<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'SpeedySMS - Convenient and Reliable';
$request_url = urldecode(Url::toRoute(['/site/request'])); 
?>

<div class="sections_group">
<div class="section   " style="padding-top:20px; padding-bottom:20px; background-color:#ffffff"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><center><h2>Simple and Fast SMS Messaging</h2></center><center>
<br><h5 class="home-text-intro">The <b> bulk sms messaging</b> platform that lets you <b>send bulk sms </b> at <b>99.9% delivery rate</b> <br>
at <b>relatively high speed</b> with a simple, sleek, and <b>friendly</b> user interface</h5></center></div><div class="column one-second column_column"><img width="560" height="315" src="<?php echo Yii::$app->request->baseUrl; ?>/web/images/dash1.png" ></div><div class="column one-second column_column"> <div id="twk-signup-form-container">
<form name="twk-signup-form" method="post" id="twk-signup-form">
<h6 id="twk-signup-form-header">To <b><span class="hlight">request a quote</span></b> is really simple.</h6>
<div class="twk-input-container clearfix">
<input type="text" name="twk-name" maxlength="101" id="twk-name" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your name">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-name" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
</div>
<div class="twk-input-container clearfix">
<input type="email" name="twk-email" id="twk-email" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your email">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label id="twk-email-label" for="twk-email" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
<div id="twk-email-loader" class="twk-loader"></div>
</div>
<div class="twk-input-container clearfix">
<input type="text" name="twk-name" maxlength="101" id="twk-name" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your phone number">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-name" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
</div>
<div class="twk-input-container clearfix">
<textarea type="password" name="twk-password" id="twk-password" class="twk-text" aria-required="true" aria-invalid="false" placeholder="Type your message here."></textarea>
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-password" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
<div class="twk-password-meter">
<div class="twk-password-meter-bg">
<div class="twk-password-meter-bar"></div>
</div>
</div>
<div class="twk-password-meter-message"></div>
</div>
<div class="twk-button-container">
<input type="submit" id="twk-sumbit-btn" value="Request quote" class="wpcf7-form-control wpcf7-submit button button_filled button_large">
<div id="twk-submit-loader" class="twk-loader"></div>
</div>
</form>
<p id="twk-submit-message" class="twk-error"></p>
</div>
</div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:#d1f0f3"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><br/>
<br/>
<center><h3>How much does it cost?</h3></center>

</div><div class="column one-second column_icon_box"><div class="icon_box icon_position_top"><div class="desc_wrapper"><h4 class="title">Enter no of messages</h4>
<div class="twk-input-container clearfix">
<input type="number" name="no_of_messages" id="no_of_messages" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="# of messages to send">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label id="twk-email-label" for="twk-email" class="error twk-error" generated="true"></label>
<div class="clear"></div></div>
</div>
</div></div></div><div class="column one-second column_icon_box"><div class="icon_box icon_position_top"><div class="desc_wrapper"><h4 class="title">Enter Bulk SMS Budget</h4><div class="twk-input-container clearfix">
<input type="number" name="no_of_messages" id="no_of_messages" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="# of messages to send">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label id="twk-email-label" for="twk-email" class="error twk-error" generated="true"></label>
<div class="clear"></div></div></div></div></div></div></div></div></div>

<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:#f5f5f5"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><br/>
<br/>
<center><h3>Follow these steps to get started</h3></center></div><div class="column one-third column_icon_box"><div class="icon_box icon_position_top"><div class="icon_wrapper"><i class="icon-user"></i></div><div class="desc_wrapper"><h4 class="title">Sigup and login</h4><hr/><div class="desc">Follow the signup or login link in the menu above to setup your account.</div></div></div></div><div class="column one-third column_icon_box"><div class="icon_box icon_position_top"><div class="icon_wrapper"><i class="icon-tape"></i></div><div class="desc_wrapper"><h4 class="title">Buy SMS plan</h4><hr/><div class="desc">Visit the pricing page to buy online. Select from the price list and associated features.</div></div></div></div><div class="column one-third column_icon_box"><div class="icon_box icon_position_top"><div class="icon_wrapper"><i class="icon-chart-line"></i></div><div class="desc_wrapper"><h4 class="title">Send and track progress</h4><hr/><div class="desc">Send SMS and Monitor how your messages are delivered. Check and review message statuses from your dashborad.</div></div></div></div></div></div></div>

<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><center><h3>All the features and benefits you would expect from bulk sms.</h3>
<h5>SpeedySMS is the right choice to send <b>bulksms</b>.<br/> It's feature-rich, always putting you first</h5></center></div></div></div></div>

<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#FFFFFF"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column"><center><h2>You are in <span class="hlight">great</span> company</h2></center></div>
</div></div></div>

<div class="section   " style="padding-top:0px; padding-bottom:0px; background-color:#f5f5f5"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_divider"><hr style="margin: 0 auto 60px; border:none; width:0; height:0;"/>
</div><div class="column one-second column_column"><h2>People <span class="hlight">read</span> Text Messages</h2>
<br/><h5>Your customers have spoken loud and clear, text messaging is their communications channel of choice - and you need to be where your customers are.</h5>
Easy signup • Relatively cheap • Simply fast</div><div class="column one-second column_column"> <div id="twk-signup-form-container">
<form name="twk-signup-form" method="post" id="twk-signup-form">
<h6 id="twk-signup-form-header">To <b><span class="hlight">request a quote</span></b> is really simple.</h6>
<div class="twk-input-container clearfix">
<input type="text" name="twk-name" maxlength="101" id="twk-name" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your name">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-name" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
</div>
<div class="twk-input-container clearfix">
<input type="email" name="twk-email" id="twk-email" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your email">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label id="twk-email-label" for="twk-email" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
<div id="twk-email-loader" class="twk-loader"></div>
</div>
<div class="twk-input-container clearfix">
<input type="text" name="twk-name" maxlength="101" id="twk-name" class="twk-text required" aria-required="true" aria-invalid="false" placeholder="Your phone number">
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-name" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
</div>
<div class="twk-input-container clearfix">
<textarea type="password" name="twk-password" id="twk-password" class="twk-text" aria-required="true" aria-invalid="false" placeholder="Type your message here."></textarea>
<div class="twk-error-container">
<span class="twk-error-alert"></span>
<label for="twk-password" class="error twk-error" generated="true"></label>
<div class="clear"></div>
</div>
<div class="twk-password-meter">
<div class="twk-password-meter-bg">
<div class="twk-password-meter-bar"></div>
</div>
</div>
<div class="twk-password-meter-message"></div>
</div>
<div class="twk-button-container">
<input type="submit" id="twk-sumbit-btn" value="Request quote" class="wpcf7-form-control wpcf7-submit button button_filled button_large">
<div id="twk-submit-loader" class="twk-loader"></div>
</div>
</form>
<p id="twk-submit-message" class="twk-error"></p>
</div>
<script>
function myFunction() {
    document.getElementById("twk-signup-form").reset();
}
window.onload = myFunction;
</script>
</div><div class="column one column_divider"><hr style="margin: 0 auto 60px; border:none; width:0; height:0;"/>
</div></div></div></div>

<div class="section the_content"><div class="section_wrapper"><div class="the_content_wrapper"></div></div>
</div> 

</div>