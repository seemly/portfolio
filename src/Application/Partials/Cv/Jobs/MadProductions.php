<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

class MadProductions extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Mad Productions';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Frontend Developer';
  }

  /**
   * @return string
   */
  protected function _description()
  {
    return 'E-commerce frontend developer';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(3, 2010);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(10, 2012);
  }

}
