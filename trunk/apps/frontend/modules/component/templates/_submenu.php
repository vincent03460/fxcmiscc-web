<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<div class="menu">
    <ul>
        <li class="page_item"><a href="/home" title="<?php echo __("Home") ?>"><?php echo __("Home") ?></a></li>
        <li class="page_item"><a href="/fx_cmisc" title="<?php echo __("FX-CMISC") ?>"><?php echo __("FX-CMISC") ?></a>
            <ul class='children'>
                <li class="page_item"><a href="/fx_cmisc" title="<?php echo __("Our Team") ?>"><?php echo __("Our Team") ?></a></li>
                <li class="page_item"><a href="/fx_cmisc/whiteLabel" title="<?php echo __("White Label") ?>"><?php echo __("White Label") ?></a></li>
            </ul>
        </li>
        <li class="page_item"><a href="/forex_education" title="<?php echo __("FOREX Education") ?>"><?php echo __("FOREX Education") ?></a>
            <ul class='children'>
                <li class="page_item"><a href="/forex_education" title="<?php echo __("Forex Essentials") ?>"><?php echo __("Forex Essentials") ?></a></li>
                <li class="page_item"><a href="/forex_education/forexMarket" title="<?php echo __("Forex Market") ?>"><?php echo __("Forex Market") ?></a></li>
                <li class="page_item"><a href="/forex_education/characteristics" title="<?php echo __("Characteristics") ?>"><?php echo __("Characteristics") ?></a></li>
                <li class="page_item"><a href="/forex_education/keyFactors" title="<?php echo __("Key Factors") ?>"><?php echo __("Key Factors") ?></a></li>
                <li class="page_item"><a href="/forex_education/fundamentalAnalysis" title="<?php echo __("Fundamental Analysis") ?>"><?php echo __("Fundamental Analysis") ?></a></li>
                <li class="page_item"><a href="/forex_education/technicalAnalysis" title="<?php echo __("Technical Analysis") ?>"><?php echo __("Technical Analysis") ?></a></li>
                <li class="page_item"><a href="/forex_education/economicCalendar" title="<?php echo __("Economic Calendar") ?>"><?php echo __("Economic Calendar") ?></a></li>
            </ul>
        </li>
        <li class="page_item"><a href="/trading_platform" title="<?php echo __("Trading Platform") ?>"><?php echo __("Trading Platform") ?></a>
            <ul class='children'>
                <li class="page_item"><a href="/trading_platform" title="<?php echo __("Meta Trader 4") ?>"><?php echo __("Meta Trader 4") ?></a></li>
                <li class="page_item"><a href="/trading_platform/tradingSignal" title="<?php echo __("Trading Signal") ?>"><?php echo __("Trading Signal") ?></a></li>
            </ul>
        </li>
        <li class="page_item"><a href="/trading_products" title="<?php echo __("Trading Products") ?>"><?php echo __("Trading Products") ?></a>
            <ul class='children'>
                <li class="page_item"><a href="/trading_products" title="<?php echo __("Forex (FX)") ?>"><?php echo __("Forex (FX)") ?></a></li>
                <li class="page_item"><a href="/trading_products/cfds" title="<?php echo __("CFDs") ?>"><?php echo __("CFDs") ?></a></li>
                <li class="page_item"><a href="/trading_products/preciousMetals" title="<?php echo __("Precious Metals") ?>"><?php echo __("Precious Metals") ?></a></li>
            </ul>
        </li>
        <li class="page_item"><a href="/contact_us" title="<?php echo __("Contact Us") ?>"><?php echo __("Contact Us") ?></a>
        </li>
    </ul>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var url = "<?php echo "/" . $module . ($action == "index" ? "" : "/" . $action) ?>";
        var menu = $("div.menu > ul li a[href$=\"" + url + "\"]");
        menu.parent().addClass("current_page_item");
        menu.parent().parent().parent('li.page_item').addClass("current_page_item");
    });
</script>
