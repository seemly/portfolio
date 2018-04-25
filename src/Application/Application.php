<?php
namespace App\Application;

use App\Application\Controllers\CvController;
use Cubex\Kernel\ApplicationKernel;

class Application extends ApplicationKernel
{
  public function getRoutes()
  {
    return [
      'cv' => CvController::class,
    ];
  }

  public function defaultAction()
  {
    return 'Need to sort defaultAction in Application';
  }
}
