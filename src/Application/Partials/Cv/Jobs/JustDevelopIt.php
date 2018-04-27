<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

class JustDevelopIt extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Just Develop It';
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
    return 'Do frontend stuff for all the things';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(10, 2012);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(5, 2014);
  }

}
