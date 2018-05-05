<?php
namespace App\Application\Infrastructure\Traits\Ui;

trait UiContentTrait
{
  /**
   * @var array
   */
  protected $_content = [];

  /**
   * @param $content
   *
   * @return $this
   */
  public function setContent($content)
  {
    $this->_content = [$content];
    return $this;
  }

  /**
   * @return array
   */
  public function getContent()
  {
    return $this->_content;
  }

  /**
   * @param $content
   *
   * @return $this
   */
  public function prependContent($content)
  {
    array_unshift($this->_content, $content);
    return $this;
  }

  /**
   * @param $content
   *
   * @return $this
   */
  public function appendContent($content)
  {
    $this->_content[] = $content;
    return $this;
  }
}
