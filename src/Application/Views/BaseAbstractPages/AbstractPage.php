<?php
namespace App\Application\Views\BaseAbstractPages;

use App\Application\Infrastructure\Components\Analytics\GoogleAnalytics;
use App\Application\Infrastructure\Enums\Bootstrap\BootstrapLayout;
use Cubex\View\ViewModel;
use Packaged\Glimpse\Tags\Div;

abstract class AbstractPage extends ViewModel
{
  const CONTAINER_PAGE = BootstrapLayout::CONTAINER;
  const FLUID_CONTAINER_PAGE = BootstrapLayout::CONTAINER_FLUID;

  protected $_pageLayout = self::CONTAINER_PAGE;
  protected $_removeAnalytics = false;

  abstract protected function _getContent();

  /**
   * @return string
   */
  public function render()
  {
    if(!$this->_removeAnalytics)
    {
      $output[] = GoogleAnalytics::i();
    }

    $output[] = Div::create(
      [
        $this->_getContent(),
      ]
    )->addClass($this->_pageLayout);

    return implode('', $output);
  }

}
