<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

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
   * @return string
   */
  protected function _description()
  {
    return 'Build stuff in fortifi';
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
