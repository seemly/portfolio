<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\HeadingFive;
use Packaged\Glimpse\Tags\Text\Paragraph;

class Babcock extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Babcock International';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Full-Stack Web Developer';
  }

  /**
   * @return array
   */
  protected function _getMaintenanceProjects()
  {
    $primaryProject = $this->_createOutboundLink('Babcock International', 'http://babcockinternational.com');

    $list = UnorderedList::create();
    $list->addItem($primaryProject);
    $list->addItem($this->_createOutboundLink('Cavendish Nuclear', 'https://www.cavendishnuclear.com'));
    $list->addItem($this->_createOutboundLink('Babcock Flights', 'https://www.babcock.flights'));

    return [
      HeadingFive::create('Daily Tasks and Projects'),
      Paragraph::create(
        'I work within the web development team on planning and building new projects, implementing new functionality, maintenance and support'
      ),
      $list,
      Paragraph::create(
        'The majority of projects are inherited code-bases, primarily built on Wordpress.'
      ),
    ];
  }

  /**
   * @return array
   */
  protected function _description()
  {
    return [
      $this->_getMaintenanceProjects(),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Portsmouth, North Harbour';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(3, 2020);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
