<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;

class AbacusEmedia extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Abacus E-media';
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
    return 'Build new and maintain current websites developed on the in-house proprietary platform, WebVision.';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(5, 2014);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(11, 2014);
  }

}
