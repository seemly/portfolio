<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

class VandF extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'V&F Sheet Metal';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Sheet Metal Fabricator';
  }

  /**
   * @return string
   */
  protected function _description()
  {
    return 'Machine setter / operator';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(9, 1998);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(9, 2008);
  }

}
