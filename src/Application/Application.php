<?php
namespace App\Application;

use App\Application\Controllers\CvController;
use App\Application\Controllers\SearchController;
use Cubex\Kernel\ApplicationKernel;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Application extends ApplicationKernel
{
  public function getRoutes()
  {
    return [
      'cv'     => CvController::class,
      'search' => SearchController::class,
    ];
  }

  public function defaultAction()
  {
    return RedirectResponse::create('/cv', 301);
  }
}
