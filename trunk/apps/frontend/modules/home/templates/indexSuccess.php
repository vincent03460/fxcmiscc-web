<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>

<style type="text/css">
    div#first a {
        font-size: 11px;
    }
</style>

<div id="slideshow">

    <!-- SlidesJS Required: Start Slides -->
    <!-- The container is used to define the width of the slideshow -->
    <div class="container">
        <div id="slides">
            <a href="#"><img src="/images/slide4.jpg"></a>
            <a href="#"><img src="/images/slide5.jpg"></a>
            <a href="#"><img src="/images/slide1.jpg"></a>
            <a href="#"><img src="/images/slide2.jpg"></a>
            <a href="#"><img src="/images/slide3.jpg"></a>
            <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
            <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
        </div>
    </div>
    <!-- End SlidesJS Required: Start Slides -->

    
    <!-- SlidesJS Required: Link to jquery.slides.js -->
    <script type="text/javascript" src="/js/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.slides.js"></script>
    <!-- End SlidesJS Required -->

    <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
    <script>
        $(document).ready(function() {
            $('#slides').slidesjs({
                width: 940,
                height: 380,
                pagination: {
                    active: true,
                    // [boolean] Create pagination items.
                    // You cannot use your own pagination. Sorry.
                    effect: "fade"
                    // [string] Can be either "slide" or "fade".
                },
                play: {
                    active: true,
                    effect: "fade",
                    auto: true,
                    interval: 8000,
                    swap: true
                }
            });
        });
    </script>

    <!-- End SlidesJS Required -->
</div>

<!-- EXCHANGERATES.ORG.UK LIVE FOREX RATES TICKER START -->
<div class="marquee">
    <script type="text/javascript">
        var w = '940';
        var s = '1';
        var mbg = 'f0f0f0';
        var bs = 'yes';
        var bc = '000044';
        var f = 'verdana';
        var fs = '10px';
        var fc = '000044';
        var lc = '000044';
        var lhc = 'fe9a00';
        var vc = '000044';
    </script>
    <script type="text/javascript" src="http://www.currency.me.uk/remote/CUK-LFOREXRTICKER-1.php"></script>
</div>
<!-- EXCHANGERATES.ORG.UK LIVE FOREX RATES TICKER END -->

<div id="home_middle" class="home">

    <div class="col left first_col">
        <h1><?php echo __("About") ?></h1>
        <p style="font-size: 12px;"><?php echo __("Our professional and efficient team provides top-notch pre- and after-sales services. We handle queries on account opening, technical troubleshooting, funding instructions, trade execution and everything else you need to know with regards to your account.") ?></p>
        <a href="/fx_cmisc" class="read_more"><?php echo __("Read More") ?></a>
    </div>

    <div class="col left second_col">
        <h1><?php echo __("News") ?></h1>

        <div id="first" class="widget-area" style="font-family: font-family: 'Open Sans', sans-serif; font-size: 13px; line-height: 20px;">
            <ul style="list-style-type: none" class="xoxo">
                <li id="rss-3" class="widget-container widget_rss"><h3 class="widget-title"><a class='rsswidget' href='http://www.dailyfx.com/feeds/forex_market_news' title='Syndicate this content'><img style='border:0' width='14' height='14' src='/images/rss.png' alt='RSS'/></a> <a class='rsswidget' href='http://www.dailyfx.com//feeds/forex_market_news?fmt=rss_2.0' title='Forex Market News'>DailyFX &#8211; Forex Market News</a></h3>
                    <ul>
                        <li>
                            <a class='rsswidget' href='http://www.dailyfx.com/forex/fundamental/daily_briefing/daily_pieces/commodities/2014/12/16/Crude-Remains-At-Risk-On-US-Inventories-Gold-Braces-For-FOMC-Decision.html?DFXfeeds=forex:fundamental:daily_briefing:daily_pieces:commodities' title='Crude oil may remain under pressure if upcoming US Inventories Data feeds supply glut concerns, while gold faces significant volatility on the back of the Fed decision. [&hellip;]'><?php echo __("Crude Remains At Risk On US Inventories, Gold Braces For FOMC Decision") ?></a><span class="rss-date"><?php echo __("December 16, 2014") ?></span>
                        </li>
                        <li>
                            <a class='rsswidget' href='http://www.dailyfx.com/forex/fundamental/us_dollar_index/daily_dollar/2014/12/16/GBP-USD-Threatens-Range-Retains-Bullish-Momentum-Despite-Soft-UK-CPI.html?DFXfeeds=forex:fundamental:us_dollar_index:daily_dollar' title='GBP/USD may continue to threaten the range-bound price action carried over from the previous month as the bullish RSI momentum gathers pace. [&hellip;]'><?php echo __("GBP/USD Threatens Range, Retains Bullish Momentum Despite Soft UK CPI") ?></a><span class="rss-date"><?php echo __("December 16, 2014") ?></span>
                        </li>
                        <li>
                            <a class='rsswidget' href='http://www.dailyfx.com/forex/fundamental/article/special_report/2014/12/16/forex-russian-ruble-trading-is-still-too-risky.html?DFXfeeds=forex:fundamental:article:special_report' title='The Russian Ruble continued sharply lower despite an aggressive reaction from the Central Bank of Russia. Here’s why we would avoid holding USD/RUB positions. [&hellip;]'><?php echo __("Russian Ruble Tumbles Further - Holding RUB Positions Far too Risky") ?></a><span class="rss-date"><?php echo __("December 16, 2014") ?></span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div> <!-- #first .widget-area -->
    </div>

    <div class="col left third_col" style="padding-top:30px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;">
        <!-- <a href="" class="open_live_account"></a>
      <a href="" class="open_demo_account"></a>
      <a href="" class="member_login"></a>-->

        <a href="#" class="icon_user" style="padding-left:5px;"></a>
        <a href="/contact_us" class="icon_email"></a>

        <a href="#" class="open_demo_account"></a>
        <a href="#" class="open_live_account"></a>

    </div>

</div><!--home_middle-->

<img src="/images/border_shadow.jpg"/>

<div id="download_block">
    <h1><?php echo __("Download MetaTrader 4") ?></h1>

    <div class="download_col">
        <a href="#"><img src="/images/windows.jpg"/></a>
        <a href="#" class="donwload_link">Windows</a>
    </div>

    <div class="download_col">
        <a href="https://itunes.apple.com/en/app/metatrader-4/id496212596?mt=8" target="_blank"><img
                src="/images/ios.jpg"/></a>
        <a href="https://itunes.apple.com/en/app/metatrader-4/id496212596?mt=8" target="_blank" class="donwload_link">iOS</a>
    </div>

    <div class="download_col">
        <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4" target="_blank"><img
                src="/images/android.jpg"/></a>
        <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4" target="_blank"
           class="donwload_link">Android</a>
    </div>

    <div class="clear"></div>

</div>