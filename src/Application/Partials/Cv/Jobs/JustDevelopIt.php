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
        'During my employment at JDI, I was the sole front-end developer tasked with ' .
        'developing and managing the front-end of 6 different cloud backup customer facing, marketing related websites.'
      ),
      Paragraph::create(
        'Each of the 6 brands also had their own themed customer control panel for file management, ' .
        'built upon the Twitter Bootstrap CSS framework providing a responsive, cross-platform, cross-browser UI.'
      ),
      Paragraph::create(
        'Along side the control panels, there was also the requirement to create a customer support suite ' .
        'which was very much the majority of my work, creating global components and generic styles - ' .
        'allowing the development team to build pages as required in a modular fashion.'
      ),
      Paragraph::create(
        'I also developed and maintained the following websites that are owned and run by the JDI parent company;'
      ),
      UnorderedList::create()->addItems(
        [
          'skylarkcountryclub.co.uk',
          'turboyourpc.com',
          'jdiinvestments.com',
          'jdidevelopments.com',
        ]
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
