<?php
namespace App\Application\Views\Cv;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Text\HeadingOne;
use Packaged\Glimpse\Tags\Text\Paragraph;

class CvPage extends AbstractContainerPage
{
  protected $_name = 'Chris Sparshott';
  protected $_jobTitle = 'PHP Web Developer / Frontend Developer';

  /**
   * @return Div
   */
  protected function _intro()
  {
    return Div::create(
      [
        Div::create(
          [
            HeadingOne::create($this->_name),
            Paragraph::create($this->_jobTitle)->addClass(BS::FONT_ITALIC),
          ]
        )->addClass(BS::COL_SM_8),
        Div::create()->addClass(BS::COL_SM_4)
      ]
    )->addClass(BS::ROW, 'intro');
  }

  /**
   * @param string $name
   * @param mixed  $content
   *
   * @return Div
   */
  protected function _section($name, $content)
  {
    return Div::create(
      [
        Div::create($name)->addClass(BS::COL_SM_3),
        Div::create($content)->addClass(BS::COL),
      ]
    )->addClass(BS::ROW, BS::JUSTIFY_CONTENT_SM_CENTER);
  }

  protected function _getContent()
  {
    return [
      $this->_intro(),
      $this->_section('Profile', 'blah'),
      $this->_section('Skills', 'blah'),
      $this->_section('Technical', 'blah'),
      $this->_section('Experience', 'blah'),
      $this->_section('Education', 'blah'),
    ];
  }

}
