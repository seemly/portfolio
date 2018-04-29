<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

class One2create extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'One2create';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Junior Frontend Developer';
  }

  /**
   * @return string
   */
  protected function _description()
  {
    return 'Where it all began.';
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Droxford, Southampton';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(9, 2008);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(3, 2010);
  }

}
