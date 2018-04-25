<?php
namespace App\Application\Views\BaseAbstractPages;

use App\Application\Infrastructure\Interfaces\IPageLayoutTypes;
use Cubex\View\ViewModel;
use Packaged\Glimpse\Tags\Div;

abstract class AbstractPage extends ViewModel implements IPageLayoutTypes
{
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
      $output[] = 'google analytics';
    }

    $output[] = Div::create(
      [
        $this->_getContent(),
      ]
    )->addClass($this->_pageLayout);

    return implode('', $output);
  }

}
