<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Views\WelcomeView;

class WelcomeController extends AbstractAppController
{
  /**
   * @return WelcomeView
   */
  public function defaultAction()
  {
    $this->setPageTitle('some title');

    return new WelcomeView();
  }
}
