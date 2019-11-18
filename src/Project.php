<?php
namespace App;

use Cubex\Kernel\CubexKernel;
use App\Application\Application;

class Project extends CubexKernel
{

  public function getRoutes()
  {
  }

  /**
   * Default action will be executed if no alternate route can be found
   *
   * @return Application()
   */
  public function defaultAction()
  {
    return new Application();
  }
}
