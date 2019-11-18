<?php
namespace App\Application\Controllers;

use Cubex\View\LayoutController;
use Packaged\Dispatch\AssetManager;
use App\Application\Views\WelcomeView;

class WelcomeController extends LayoutController
{
  private $am;

  protected function _init()
  {
    $this->am = AssetManager::assetType();
    $this->am->requireCss('css/welcome');
  }

  /**
   * @return WelcomeView
   */
  public function defaultAction()
  {
    return new WelcomeView($this->am);
  }
}
