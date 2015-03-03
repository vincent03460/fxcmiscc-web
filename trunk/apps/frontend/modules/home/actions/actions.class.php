<?php

/**
 * home actions.
 *
 * @package    sf_sandbox
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions
{
    public function executeIndex()
    {
        // Pull RSS from website.
        $rssUrl = "http://rss.forexfactory.net/news/all.xml";
        $rss = new SimpleXMLElement(file_get_contents($rssUrl));
        $this->rssNews = $rss->channel->item;
    }

    public function executeLive_Account()
    {
    }

    public function executeDemo_Account()
    {
    }
}
