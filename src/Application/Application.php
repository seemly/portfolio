<?php
namespace App\Application;

use App\Application\Controllers\CvController;
use Cubex\Kernel\ApplicationKernel;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
    return RedirectResponse::create('/cv', 301);
  }
}
