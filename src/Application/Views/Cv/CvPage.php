<?php
namespace App\Application\Views\Cv;

use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Packaged\Glimpse\Tags\Div;

class CvPage extends AbstractContainerPage
{
  protected $_name = 'Chris Sparshott';
  protected $_jobTitle = 'PHP Web Developer / Frontend Developer';

  /**
   * @param string $name
   * @param mixed  $content
   *
   * @return Div
   */
  protected function _section($name, $content)
  {
    $section = Div::create(
      [
        Div::create($name)->addClass('col-3'),
        Div::create($content)->addClass('col'),
      ]
    )->addClass('row', 'justify-content-md-center');
    return $section;
  }

  protected function _getContent()
  {
    return [
      $this->_section($this->_name, $this->_jobTitle),
      $this->_section('Profile', 'blah'),
      $this->_section('Skills', 'blah'),
      $this->_section('Technical', 'blah'),
      $this->_section('Experience', 'blah'),
      $this->_section('Education', 'blah'),
    ];
  }

}
