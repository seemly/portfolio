<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Infrastructure\Interfaces\IDiscipline;
use App\Application\Infrastructure\Meta\Personal;
use App\Application\Views\Cv\CvPage;
use Packaged\Dispatch\AssetManager;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CvController extends AbstractAppController implements IDiscipline
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

    $request = $this->_getRequest();
    $query   = $request->query;

    // My default discipline should now be PHP - Primarily because at time of writing I enjoy it more.
    $discipline = self::DISCIPLINE_PHP;
    if($query->has(self::DISCIPLINE_FRONTEND))
    {
      $discipline = self::DISCIPLINE_FRONTEND;
    }

    return new CvPage(self::DISCIPLINE_FRONTEND);
  }

  /**
   * @return RedirectResponse
   */
  public function downloadCv()
  {
    $filename = 'cv-chris-sparshott-full-stack-developer.pdf';
    $path = 'files/cv/' . $filename;
    $am = AssetManager::assetType();

    return RedirectResponse::create($am->getResourceUri($path));
  }

}
