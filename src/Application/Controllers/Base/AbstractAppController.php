<?php
namespace App\Application\Controllers\Base;

class AbstractAppController extends BaseAbstractAppController
{

  protected function _init()
  {
    $this->_prepareMetaTags();
    $this->_headAssets();
    $this->_jsAssets();
  }

  protected function _headAssets()
  {
    $links = [
      $this->_css('vendor/fontawesome/css/font-awesome.min.css'),
      $this->_css('vendor/bootstrap/css/bootstrap.min.css'),
      $this->_css('css/base.css'),
      $this->_favIcon('/favicon.ico'),
    ];

    $this->layout()->setData('css', implode("\r\n", $links));
  }

  protected function _jsAssets()
  {
    $faIcon = $this->_js(
      'https://pro.fontawesome.com/releases/v5.0.10/js/all.js'
    );
    $faIcon->setAttribute('defer', true);
    $faIcon->setAttribute('crossorigin', 'anonymous');
    $faIcon->setAttribute(
      'integrity',
      'sha384-+1nLPoB0gaUktsZJP+ycZectl3GX7wP8Xf2PE/JHrb7X1u7Emm+v7wJMbAcPr8Ge'
    );

    $links = [
      $this->_js('vendor/jquery/jquery-3.3.1.min.js'),
      $this->_js('vendor/bootstrap/js/bootstrap.min.js'),
      $faIcon,
    ];

    $this->layout()->setData('js', implode("\r\n", $links));
  }

  /**
   * @param string $title
   *
   * @return $this
   */
  public function setPageTitle($title)
  {
    $this->layout()->setData('title', $title);
    return $this;
  }

  /**
   * @param string $name
   * @param string $content
   *
   * @return $this
   */
  public function addMetaTag($name, $content)
  {
    $this->_metaTags[$name] = $content;
    $this->_prepareMetaTags();
    return $this;
  }

}
