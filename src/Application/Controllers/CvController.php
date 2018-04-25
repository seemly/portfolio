<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Views\Cv\CvPage;

class CvController extends AbstractAppController
{

  public function getRoutes()
  {
    return [];
  }

  /**
   * @return CvPage
   */
  public function defaultAction()
  {
    $this->setPageTitle('Chris Sparshott - CV');
    return new CvPage();
  }

}
