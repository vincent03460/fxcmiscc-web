<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<h1 style="border-bottom: 2px solid #E1E1E1; margin-top: 20px; padding-bottom: 8px;"><?php echo __("Open Demo Account") ?></h1>

<div class="left" style="width:450px;">

    <div class="wpcf7" id="wpcf7-f33-t1-o1">
        <form action="#" method="post" class="wpcf7-form">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="33"/>
                <input type="hidden" name="_wpcf7_version" value="3.2.1"/>
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f33-t1-o1"/>
                <input type="hidden" name="_wpnonce" value="91e909cbf8"/>
            </div>

            <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Full Name"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-title"><input type="text" name="your-title" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Title"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-passport"><input type="text" name="your-passport" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Passport"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-email"><input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Email"/></span></p>
            
            <p><span class="wpcf7-form-control-wrap your-phonenum"><input type="text" name="your-phonenum" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Phone Number"/></span></p>

            <p><span class="wpcf7-form-control-wrap your-address"><textarea name="your-address" class="wpcf7-form-control  wpcf7-textarea wpcf7-use-title-as-watermark" cols="40" rows="10" title="Address"></textarea></span></p>

            <p><span class="wpcf7-form-control-wrap your-country"><input type="text" name="your-country" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark" size="40" title="Country"/></span></p>

            <p><input align="right" type="submit" onclick="alert('Form submitted'); window.location = 'demo_Account'" value="Submit" class="wpcf7-form-control"/></p>

            <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
    </div>
</div>

<!-- Preload if image is big-->
<div style="display:none">
	<img src="/images/open_live_account_hover.png" />
    <img src="/images/open_demo_account_hover.png" />
    <img src="/images/member_login_hover.png" />
</div>


<script type='text/javascript' src='/js/jquery.form16e3.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {
	loaderUrl: "/images/ajax-loader.gif",
	sending: "Sending...",
	cached: "1"
};
/* ]]> */
</script>
<script type='text/javascript' src='/js/scriptsdeae.js'></script>
