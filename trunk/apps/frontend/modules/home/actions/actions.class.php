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

  public function executeVacCreate() // TODO for VAC testing
  {
    $username = $this->getRequestParameter("username");
    $code = $this->getRequestParameter("code");
    $vehicle_no = $this->getRequestParameter("vehicle_no");
    $success = 0;
    $created_on = null;
    $expired_on = null;
    $expired_on_d = null;

    if ($username && $code && $vehicle_no) {
      $success = 1;
      date_default_timezone_set("Asia/Kuala_Lumpur");
      $datetime = new DateTime();

      $created_on = $datetime->format("n/j/Y G:i"); // M/D/Y H:mm
      $expired_on = 60 * 2; // In minutes, 2 hours
      $expired_on_d = $datetime->add(new DateInterval("PT" . $expired_on . "M"))->format("n/j/Y G:i");
    }

    $arr = array(
        "success" => $success,
        "created_on" => $created_on,
        "expired_on" => $expired_on,
        "expired_on_d" => $expired_on_d
    );

    echo json_encode($arr);
    return sfView::HEADER_ONLY;
  }

  public function executeVacVerify() // TODO for VAC testing
  {
    $username = $this->getRequestParameter("username");
    $code = $this->getRequestParameter("code");
    $vehicle_no = $this->getRequestParameter("vehicle_no");
    $isValid = 0;

    if ($username && $code && $vehicle_no) {
      $isValid = 1;
    }

      $arr = array(
      "isValid" => $isValid
    );

    echo json_encode($arr);
    return sfView::HEADER_ONLY;
  }
}
