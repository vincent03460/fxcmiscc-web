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
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
  }

  public function executeLive_Account()
  {
  }

    public function executeDemo_Account()
  {
  }

  public function executeVacLogin() // TODO for VAC testing
  {
    $username = $this->getRequestParameter("username");
    $password = $this->getRequestParameter("password");

    $success = 0;

    if ($username == "aio" && $password == "123") {
      $success = 1;
    }

    $arr = array(
      "success" => $success
    );

    echo json_encode($arr);
    return sfView::HEADER_ONLY;
  }
}
