<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Infrastructure\Meta\Personal;
use App\Application\Views\Cv\CvPage;
use Packaged\Dispatch\AssetManager;

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
    $this->setPageTitle(Personal::NAME . ' - CV');

    $am = AssetManager::assetType();
    $am->requireCss('css/cv');

    return new CvPage();
  }

}
