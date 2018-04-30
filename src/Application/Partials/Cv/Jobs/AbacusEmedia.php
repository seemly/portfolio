<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Text\Paragraph;

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
   * @return array
   */
  protected function _description()
  {
    $companyWebsite = Link::create('https://www.abacusemedia.com/', 'company website');
    $companyWebsite->setTarget();

    return [
      Paragraph::create(
        'I was employed as a member of the frontend development team, ' .
        'tasked with both building and maintaining the HTML, CSS and implementation of ' .
        'in-house JS plugins to B2B media publishing Saas platform; WebVision.'
      ),
      Paragraph::create(
        [
          'During my time working at Abacus e-Media using the proprietary in-house system (WebVision), ' .
          'I had the honour of templating the ',
          $companyWebsite,
          ' for the promotion and marketing phase.'
        ]
      ),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Gun Wharf, Portsmouth';
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
