<?php
namespace App\Application\Controllers;

use Cubex\View\LayoutController;
use Packaged\Glimpse\Core\HtmlTag;

class AbstractAppController extends LayoutController
{
  /** @var  string */
  protected $_pageTitle;
  /** @var  array */
  protected $_metaTags;

  protected function _init()
  {
    $this->_prepareMetaTags();
  }

  /**
   * @param string $name
   * @param string $content
   *
   * @return $this
   */
  public function addMetaTag($name = '', $content = '')
  {
    $this->_metaTags[$name] = $content;
    $this->_prepareMetaTags();
    return $this;
  }

  /**
   * @param string $name
   * @param string $content
   *
   * @return HtmlTag
   */
  protected function _createMetaTag($name = '', $content = '')
  {
    $tag = HtmlTag::createTag('meta');
    $tag->setAttribute('name', $name);
    $tag->setAttribute('content', $content);
    return $tag;
  }

  protected function _prepareMetaTags()
  {
    if($this->_metaTags)
    {
      $tags = '';
      foreach($this->_metaTags as $name => $content)
      {
        $tags .= $this->_createMetaTag($name, $content) . "\n";
      }
      $this->layout()->setData('metaTags', $tags);
    }
    return $this;
  }

  /**
   * @param      $title
   * @param bool $layoutOnly
   *
   * @return $this
   */
  public function setPageTitle($title, $layoutOnly = false)
  {
    if(!$layoutOnly)
    {
      $this->_pageTitle = $title;
    }

    $this->layout()->setData('title', $this->_pageTitle);

    return $this;
  }

}
