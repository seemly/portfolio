<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\BoldText;
use Packaged\Glimpse\Tags\Text\HeadingFive;
use Packaged\Glimpse\Tags\Text\Paragraph;

class TwentyOneSixHeadOfDigital extends AbstractCvJobItem
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
    return 'Head of Digital';
  }

  /**
   * @return array
   */
  protected function _description()
  {
    $projects = UnorderedList::create();
    $projects->addItem('Instigating the documentation of our current project process map to discover issues and / or bottlenecks.');
    $projects->addItem('Restructuring of project management, improving visibility and scheduling to allow the Client Services team to better manage client expectations.');
    $projects->addItem('Initiating project debriefs to ensure cross department internal processes are optimal, primarily to avoid repetitive issues per project type.');
    $projects->addItem('Heading up internal learning lunches, whilst also promoting & planning individual staff training.');
    $projects->addItem('Proactive mentality towards suggesting optimisations and improvements to client websites.');

    return [
      Paragraph::create(BoldText::create('Implementations;')),
      $projects,
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
    return $this->_createDate(4, 2019);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
