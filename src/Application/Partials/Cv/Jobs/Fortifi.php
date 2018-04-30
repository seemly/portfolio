<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
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

    $mdl = Link::create("https://getmdl.io", 'MDL framework');
    $mdl->setTarget();

    return [
      Paragraph::create(
        'Front-end focused PHP developer, working with PHP, HTML, CSS and JS to create the UI ' .
        'for an all encompassing marketing, CRM, support, billing and email service.'
      ),
      Paragraph::create(
        [
          "I also created the ",
          $companyWebsite,
          " using the ",
          $mdl,
          ", which is based on Google Material."
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
