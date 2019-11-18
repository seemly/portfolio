<?php
namespace App\Application\Views;

use Cubex\View\TemplatedViewModel;
use Packaged\Dispatch\AssetManager;

class WelcomeView extends TemplatedViewModel
{
  /**
   * @var AssetManager
   */
  public $am;

  /**
   * @param AssetManager $am
   */
  public function __construct(AssetManager $am)
  {
    $this->am = $am;
  }

}
