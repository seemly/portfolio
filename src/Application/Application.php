<?php
namespace App\Application;

use Cubex\Kernel\ApplicationKernel;
use App\Application\Controllers\WelcomeController;

class Application extends ApplicationKernel
{
  /**
   * @return WelcomeController
   */
  public function defaultAction()
  {
    return new WelcomeController();
  }
}
