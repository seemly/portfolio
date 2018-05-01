<?php
namespace App\Application\Infrastructure\Components\Analytics;

use Packaged\Glimpse\Core\HtmlTag;

class GoogleAnalytics
{
  protected $_trackingId = 'UA-118586351-1';

  static public function i()
  {
    $self = new static();
    return $self;
  }

  /**
   * @return HtmlTag
   */
  protected function _externalAsset()
  {
    $script = HtmlTag::createTag('script');
    $script->setAttribute('async', true);
    $script->setAttribute(
      'src',
      "https://www.googletagmanager.com/gtag/js?id={$this->_trackingId}"
    );
    return $script;
  }

  /**
   * @return string
   */
  protected function _methods()
  {
    $content = implode('', [
      "window.dataLayer = window.dataLayer || [];",
      "function gtag(){dataLayer.push(arguments);}",
      "gtag('js', new Date());",
      "gtag('config', '{$this->_trackingId}');",
    ]);

    return "<script type='text/javascript'>{$content}</script>";
  }

  /**
   * @return string
   */
  public function render()
  {
    return $this->_externalAsset() . $this->_methods();
  }

  public function __toString()
  {
    return (string)$this->render();
  }

}
