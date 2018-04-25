<?php
namespace App\Application;

use App\Application\Controllers\CvController;
use Cubex\Kernel\ApplicationKernel;
use Cubex\Responses\Error404Response;

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
    return Error404Response::create();
  }
}
