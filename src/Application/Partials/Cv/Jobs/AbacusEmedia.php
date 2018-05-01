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
        'As part of the frontend development team, building and maintaining customer ' .
        'websites using the HTML, CSS, and in-house JS plugins of the proprietary ' .
        'B2B media publishing Saas platform; WebVision.'
      ),
      Paragraph::create(
        [
          'Using WebVision, I templated the responsive, cross platform and cross browser compliant ',
          $companyWebsite,
          '.'
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
