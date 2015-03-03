<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<h1 style="border-bottom: 2px solid #E1E1E1; margin-top: 20px; padding-bottom: 8px;"><?php echo __("Forex Essentials") ?></h1>
<p><strong><?php echo __("What Is Forex?") ?></strong></p>
<p><?php echo __("Foreign exchange is the simultaneous buying of one currency and selling of another. Currencies are traded through a broker or dealer and are executed in currency pairs; for example, the Euro Dollar and the US Dollar (EUR/USD) or the British Pound and the Japanese Yen (GBP/JPY).") ?></p>
<p><?php echo __("The Foreign Exchange, also referred as “Forex” is the largest financial market in the world, with an estimated volume of $4 trillion in currencies traded daily. Forex provides income to millions of traders and large banks worldwide. It is the mechanism by which currencies are valued relative to one another, and exchanged. An individual or institution buys one currency and sells another in a simultaneous transaction. Currency trading always occurs in pairs where one currency is sold for another. The value of a currency is a reflection of the condition of that country’s economy with respect to other major economies. A trader can earn money by either buying or selling the currency.") ?></p>
<p><?php echo __("Unlike other financial markets, the Forex spot market has neither a physical location nor a central exchange. It operates through an electronic network of banks, corporations, and individuals trading one currency for another. The lack of a physical exchange enables the Forex market to operate on a 24-hour basis, spanning from one time zone to another across the major financial centres. The fact that there is no centralized exchange is important to keep in mind as it permeates all aspects of the Forex experience.") ?></p>

<p><strong><?php echo __("Advantage of Forex") ?></strong></p>
<p><?php echo __("In today’s marketplace, the dollar constantly fluctuates against the other currencies of the world. Several factors, such as the decline of global equity markets and declining world interest rates, have forced investors to pursue new opportunities.") ?></p>
<p><?php echo __("The global increase in trade and foreign investments has led to many national economies becoming interconnected with one another. This interconnection and the resulting fluctuations in exchange rates have created a huge international market: Forex. This market offers unmatched potential for profitable trading in any market condition or any stage of the business cycle. These factors equate to the following advantages") ?></p>
<p><?php echo __("There are five things give trading the forex market some unique advantages.") ?></p>
<p>
    <b><?php echo __("1. 24 Hour Market") ?></b>
    <br/>
    <?php echo __("Since the forex market is worldwide, trading is continuous as long as there is a market open somewhere in the world. Trading starts when the markets open in Australia on Sunday evening, and ends after markets close in New York on Friday.") ?>
</p>
<p>
    <b><?php echo __("2. High Liquidity") ?></b>
    <br/>
    <?php echo __("Liquidity is the ability of an asset to be converted into cash quickly and without any price discount. In forex this means we can move large amounts of money into and out of foreign currency with minimal price movement.") ?>
</p>
<p>
    <b><?php echo __("3. Low Transaction Cost") ?></b>
    <br/>
    <?php echo __("In forex, typically the cost for a transaction is built into the price. It is called the spread. The spread is the difference between the buying and selling price.") ?>
</p>
<p>
    <b><?php echo __("4. Leverage") ?></b>
    <br/>
    <?php echo __("Forex Brokers allow traders to trade the market using leverage. Leverage is the ability to trade more money on the market than what is actually in the trader’s account. If you were to trade at 50:1 leverage, you could trade $50 on the market for every $1 that was in your account. This means you could control a trade of $50,000 using only $1000 of capital.") ?>
</p>
<p>
    <b><?php echo __("5. Profit Potential from Rising and Falling Prices") ?></b>
    <br/>
    <?php echo __("The forex market has no restrictions for directional trading. This means, if you think a currency pair is going to increase in value; you can buy it, or go long. Similarly, if you think it could decrease in value you can sell it, or go short.") ?>
</p>
<p><strong><?php echo __("Margin") ?></strong></p>
<p><?php echo __("Margin is the amount of money needed as a “good faith deposit” to open a position with your broker. It is used by the broker to maintain your position. There are 2 types of margin found in common trading platform. First is Used Margin, the amount of money that broker has locked up to keep your current positions open. While this money is still yours, you can’t touch it until your broker gives it back to you either when you close your current positions or when you receive a margin call. Second is the Free Margin which is the money in your account that is available to open new positions. The margin indicates both the maximum possible leverage and the minimum amount required to open a position at a certain size. Additionally, the margin also plays a role as the credit limit to what the trader cannot surpass. Although CMIS offers its clients to trade with leverage up to 500:1, still margin and leverage are operated according to individual risk appetite and preference. CMIS doesn’t recommend trading near the full 500:1 of margin capability, this may create large amount of risk and exposure.") ?></p>
<p><strong><?php echo __("Contract Sizes and Leverage") ?></strong></p>
<p><?php echo __("Contract sizes or better known as lots, is a necessary foundation when understanding the need and benefit for high leverage in the Forex market. Since one standard lot traded in the Forex market is a $100,000 contract, a trader is essentially placing a $100,000 trade in the market without leverage. As a result, most investors would difficult to afford such a transaction.") ?></p>
<p>
    <b><?php echo __("Example:") ?></b>
    <br/>
    <?php echo __("The offer of leverage of 500:1 would allow a trader to place the same one lot ($100,000) trade with only the post of $200 in the Used Margin to control a $100,000 position.") ?>
</p>
<p><strong><?php echo __("Margin Call") ?></strong><br/><?php echo __("In event of the Equity (the value of your account) falls below the Used Margin due to trading losses, you will have to deposit more fund into your account or otherwise the trading platform will automatically close some or all of your trading position at the market price to prevent your account from falling into a negative balance. In order to continue trading after margin call, you have to deposit more fund into the account.") ?></p>
<p>
    <b><?php echo __("Example:") ?></b>
    <br/>
    <?php echo __("Trader A with a deposit of $5,000 USD for CMIS standard account, he had open one standard lot of long position on EURUSD. With the leverage of 500:1, he had used up $200 USD to hold this position with the remaining $4,800 as the Free Margin to open trade with and prevent margin call.") ?>
</p>
<p><?php echo __("Unfortunately, the EURUSD dropped 500pips after a week due to some government financial crisis in Europe cause his Free Margin to drop beyond zero and triggered the margin level. In this case, the trading platform will automatically close the position to prevent the account from turning into credit. This event is known as margin call.") ?></p>
<p><strong><?php echo __("Leverage") ?></strong></p>
<p>
    <?php echo __("Leverage simply means the percent amount of money you are allowed to borrow from the broker when you open a position. Typically in Stock market when you buy 100 shares of a company trading at $10 per share, you are required $1000 to open the trade.") ?>
    <br/>
    <?php echo __("In forex, traders use leverage to profit from the fluctuations in exchange rates between two different countries. The leverage that is achievable in the forex market is one of the highest that investors can obtain. When a trader decides to invest in the forex market, he or she must first open up a margin account with a broker. Usually, the amount of leverage provided is either 50:1, 100:1 or 200:1, depending on the broker and the size of the position the trader is trading. Standard trading is done on 100,000 units of currency, so for a trade of this size, the leverage provided is usually 50:1 or 100:1. Although the ability to earn significant profits by using leverage is substantial, leverage can also work against traders. For example, if the currency underlying one of your trades moves in the opposite direction of what you believed would happen, leverage will greatly amplify the potential losses. To avoid such a catastrophe, forex traders usually implement a strict trading style that includes the use of stop and limit orders.") ?>
</p>
<p><strong><?php echo __("Broker’s Policy on Insufficient Fund (Take Note!)") ?></strong></p>
<ul>
    <ul>
        <li><?php echo __("Different brokers have different policies on insufficient margin balance in the trader’s account.") ?></li>
        <li><?php echo __("Some brokers will square your open position when the unrealized profit and loss falls below the required margin, resulting in a zero balance in your account.") ?></li>
        <li><?php echo __("Other brokers may open a corresponding opposite position on your behalf to ‘lock in’ your losses. In this way, your account balance will not be reduced to zero.") ?></li>
        <li><?php echo __("Most brokers will require clients to top up the margin in their trading accounts within a specific deadline. If the margin is not topped up by the deadline, the broker will square the client’s open position, even if the client’s realized profit and loss may be lower than the current balance.") ?></li>
    </ul>
</ul>
<p><strong><br/><?php echo __("Swap Rate") ?></strong></p>
<p><?php echo __("The amount paid or earned as a result of the differential interest rates applicable to currency pairs when a trader holds a position over night is the Swap or Rollover rate. It is calculated on daily basic at 4:59 PM/ET. For you to be subjected to swap, trade position must have been opened before 4:59 PM/ET and held open past this time. Swap rates are tripled on Wednesday at 4:59 PM/ET. Swap rate is opposite for each currency pairs and depend on either long or short. Please refer to the summary table for swap rate traded with CMIS.") ?></p>
