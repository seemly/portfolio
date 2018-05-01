<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\Paragraph;

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
   * @return array
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'I was the sole front-end developer tasked with developing and maintaining the ' .
        'front-end of customer facing, marketing focused websites, with unique themes per brand.'
      ),
      Paragraph::create(
        'Each brand also had their own customer control panel for file management, ' .
        'built upon the Bootstrap framework providing a responsive, cross-platform, cross-browser UI.'
      ),
      Paragraph::create(
        'A customer support suite was also developed with reusable components, ' .
        'allowing the development team to build pages as required in a modular fashion.'
      ),
      Paragraph::create(
        'I also developed and maintained 5+ other websites that are owned ' .
        'and run by the JDI parent company.'
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
