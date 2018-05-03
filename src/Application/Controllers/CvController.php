<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Infrastructure\Meta\Personal;
use App\Application\Views\Cv\CvPage;
use Packaged\Dispatch\AssetManager;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CvController extends AbstractAppController
{

  public function getRoutes()
  {
    return [
      'download' => 'downloadCv'
    ];
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

  /**
   * @return RedirectResponse
   */
  public function downloadCv()
  {
    $filename = 'cv-chris-sparshott-php-frontend-developer.pdf';
    $path = 'files/cv/' . $filename;
    $am = AssetManager::assetType();

    return RedirectResponse::create($am->getResourceUri($path));
  }

}
