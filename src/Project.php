<?php
namespace App;

use App\Application\Application;
use Cubex\Kernel\CubexKernel;

class Project extends CubexKernel
{
  /**
   * @return Application()
   */
  public function defaultAction()
  {
    return new Application();
  }
}
