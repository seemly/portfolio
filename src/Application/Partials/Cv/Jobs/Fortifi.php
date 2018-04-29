<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Text\Paragraph;

class Fortifi extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Fortifi';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'PHP Web Developer';
  }

  /**
   * @return array
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'Front-end focused PHP developer, working with both PHP, HTML, CSS and JS to create the UI ' .
        'for an all encompassing billing, affiliate, support, CRM and email messaging service.'
      ),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Whiteley, Fareham';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(11, 2014);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
