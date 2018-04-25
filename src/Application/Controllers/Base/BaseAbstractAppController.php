<?php
namespace App\Application\Controllers\Base;

use Cubex\View\LayoutController;
use Packaged\Dispatch\AssetManager;
use Packaged\Glimpse\Core\HtmlTag;

class BaseAbstractAppController extends LayoutController
{
  /** @var  array */
  protected $_metaTags;

  /**
   * @param string $path
   *
   * @return HtmlTag
   */
  protected function _css($path)
  {
    $am = AssetManager::assetType();

    $tag = HtmlTag::createTag('link');
    $tag->setAttribute('rel', 'stylesheet');
    $tag->setAttribute('type', 'text/css');
    $tag->setAttribute('href', $am->getResourceUri($path));
    return $tag;
  }

  /**
   * @param string $path
   * @param string $type
   *
   * @return HtmlTag
   */
  protected function _js($path, $type = 'text/javascript')
  {
    $am = AssetManager::assetType();

    $tag = HtmlTag::createTag('script');
    $tag->setAttribute('type', $type);
    $tag->setAttribute('src', $am->getResourceUri($path));
    return $tag;
  }

  /**
   * @param $path
   *
   * @return HtmlTag
   */
  protected function _favIcon($path)
  {
    $tag = HtmlTag::createTag('link');
    $tag->setAttribute('rel', 'shortcut icon');
    $tag->setAttribute('href', $path);
    return $tag;
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

  /**
   * @return $this
   */
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

}
