<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Text\Paragraph;

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
   * @return array
   */
  protected function _description()
  {
    $companyWebsite = Link::create("http://fortifi.io", "company website");
    $companyWebsite->setTarget();

    $mdl = Link::create("https://getmdl.io", 'MDL');
    $mdl->setTarget();

    return [
      Paragraph::create(
        'Front-end focused PHP developer, creating reusable components and pages using PHP, HTML, CSS and jQuery ' .
        'for an all encompassing cloud based business solution, including: ' .
        'marketing, CRM, support, billing and email services.'
      ),
      Paragraph::create(
        [
          "With PSD's provided, I also built the ",
          $companyWebsite,
          " based on Google Material framework, ",
          $mdl,
          "."
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
