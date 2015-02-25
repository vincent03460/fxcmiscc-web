<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<h1 style="border-bottom: 2px solid #E1E1E1; margin-top: 20px; padding-bottom: 8px;"><?php echo __("Contact Us") ?></h1>

<div class="left" style="width:450px;">
    <h2><?php echo __("Contact Form") ?></h2>

    <div class="wpcf7" id="wpcf7-f33-t1-o1">
        <form action="#" method="post" class="wpcf7-form">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="33"/>
                <input type="hidden" name="_wpcf7_version" value="3.2.1"/>
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f33-t1-o1"/>
                <input type="hidden" name="_wpnonce" value="91e909cbf8"/>
            </div>

            <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Name"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-email"><input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email wpcf7-use-title-as-watermark" size="40" title="Email"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" class="wpcf7-form-control  wpcf7-textarea wpcf7-use-title-as-watermark" cols="40" rows="10" title="Message"></textarea></span></p>

            <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha-95" value="179189754"/><img alt="captcha" src="/images/wpcf7_captcha/179189754.png" class="wpcf7-form-control  wpcf7-captchac wpcf7-captcha-captcha-95" width="72" height="24"/><br/>
                <span class="wpcf7-form-control-wrap captcha-95"><input type="text" name="captcha-95" value="" class="wpcf7-form-control  wpcf7-captchar" size="40"/></span></p>

            <p><input type="submit" value="Send" class="wpcf7-form-control  wpcf7-submit"/></p>

            <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
    </div>
</div>

<div class="right" style="width:450px;">
    <p><h2>Address</h2></p>
    <p><strong><div style="color:red;">Hong Kong (HK)</div></strong></p>
    <p>Suite 2602-3, BEA Tower (APM), 418 Kwun Tong Road, Kwun Tong, Kowloon, Hong Kong.</p>
    <p><b>Email</b>: support@fxcmisc.com</p>
</div>

<!-- Preload if image is big-->
<div style="display:none">
	<img src="/images/open_live_account_hover.png" />
    <img src="/images/open_demo_account_hover.png" />
    <img src="/images/member_login_hover.png" />
</div>


<!--<script type='text/javascript' src='/js/jquery.form16e3.js'></script>-->
<script type='text/javascript'>
/* <![CDATA[ */
//var _wpcf7 = {
//	loaderUrl: "/images/ajax-loader.gif",
//	sending: "Sending...",
//	cached: "1"
//};

$("form").submit(function() {
    if ($("form input[name='your-name']").val().length <= 0) {
        alert("<?php echo __("Name cannot be blank.") ?>");
        $("form input[name='your-name']").focus();
        return false;
    }

    if ($("form input[name='your-email']").val().length <= 0) {
        alert("<?php echo __("Email cannot be blank.") ?>");
        $("form input[name='your-email']").focus();
        return false;
    }

    if ($("form textarea[name='your-message']").val().length <= 0) {
        alert("<?php echo __("Message cannot be blank.") ?>");
        $("form textarea[name='your-message']").focus();
        return false;
    }

    if ($("form input[name='captcha-95']").val().length <= 0) {
        alert("<?php echo __("Security code cannot be blank.") ?>");
        $("form input[name='captcha-95']").focus();
        return false;
    }

    if ($("form input[name='captcha-95']").val() != "RHK9") {
        alert("<?php echo __("Invalid security code.") ?>");
        $("form input[name='captcha-95']").val("");
        $("form input[name='captcha-95']").focus();
        return false;
    }

    alert("<?php echo __("Your message has been sent, thank you. We will reply you shortly.") ?>");
    window.location.href = "/contact-us";
    return true;
});
/* ]]> */
</script>
<script type='text/javascript' src='/js/scriptsdeae.js'></script>
