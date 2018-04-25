<?php
namespace App\Application\Views\PageLayouts;

use App\Application\Infrastructure\Interfaces\IPageLayoutTypes;
use Cubex\View\ViewModel;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Text\HeadingOne;

abstract class AbstractPage extends ViewModel implements IPageLayoutTypes
{
  protected $_pageLayout = self::CONTAINER_PAGE;
  protected $_removeAnalytics = false;

  abstract protected function _getHeader();

  /**
   * @return string
   */
  abstract protected function _getHeadline();

  abstract protected function _getContent();

  abstract protected function _getFooter();

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
        $this->_getHeader(),
        HeadingOne::create($this->_getHeadline()),
        $this->_getContent(),
        $this->_getFooter(),
      ]
    )->addClass($this->_pageLayout);

    return implode('', $output);
  }

}
