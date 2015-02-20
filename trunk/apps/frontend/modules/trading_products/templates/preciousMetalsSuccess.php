<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<h1 style="border-bottom: 2px solid #E1E1E1; margin-top: 20px; padding-bottom: 8px;"><?php echo __("Precious Metals") ?></h1>
<p><?php echo __("Many traders refer to precious metals as “safe-haven” investments. During times of high volatility, increased risk, and anticipated inflation, investors often move their funds to gold and silver. CMIS Trader allows you to speculate on the price movements of gold or silver relative to the US dollar currency.") ?></p>
<p><?php echo __("Precious metals (Gold and Silver) are quoted and traded similarly to our currency pairs. Precious metals include a Bid price, an Ask price, a spread, and are calculated in Pips.") ?></p>
<p><?php echo __("Precious metal trading is over the counter, with the main trading centres located in London and New York. Liquidity in the precious metals market is often highest when European market hours overlap with New York trading hours.") ?></p>

<p><strong><?php echo __("Profit / Loss Calculation  ") ?></strong></p>
<p><?php echo __("It is important to know how many ounces there are per 1 lot when trading precious metals. If you place a market order to buy 1 lot of GOLD (XAU/USD) at $1,550.50 per ounce, and the price increases to $1,551.50 per ounce, you actually made a profit of $1.00. Since you purchased 1 lot, you actually traded 100 ounces of Gold. Since a profit of $1.00 on 1 lot deal is equal to $1.00 x 100 = $100.") ?></p>

<p><strong><?php echo __("Why trade Precious Metals with CMIS Trader?") ?></strong></p>
<ul>
    <li><?php echo __("To speculate on short- and/or long-term trading opportunities in a 24-hour market") ?></li>
    <li><?php echo __("To diversify their overall portfolio across different asset classes") ?></li>
    <li><?php echo __("Applying risk management as a hedge against market volatility and financial crises") ?></li>
    <li><?php echo __("No commission charged, only the bid/offer spread") ?></li>
</ul>
