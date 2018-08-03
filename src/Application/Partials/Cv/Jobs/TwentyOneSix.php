<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Text\Paragraph;

class TwentyOneSix extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return '21Six';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Web Developer';
  }

  /**
   * @return array
   */
  protected function _description()
  {
    $companyWebsite = Link::create("http://21six.com", "company website");
    $companyWebsite->setTarget();

    return [
      Paragraph::create('Web developer'),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Fair Oak, Southampton';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(8, 2018);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
