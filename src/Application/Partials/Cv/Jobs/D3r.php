<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\BoldText;
use Packaged\Glimpse\Tags\Text\Paragraph;

class D3r extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'D3R';
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
  protected function _getImplementations()
  {
    $list = UnorderedList::create();

    if($list->getContent())
    {
      return [
        Paragraph::create(BoldText::create('Implementations;')),
        $list,
      ];
    }
    return null;
  }

  /**
   * @return array
   */
  protected function _getProjects()
  {
    $list = UnorderedList::create();
    if($list->getContent())
    {
      return [
        Paragraph::create(BoldText::create('Projects;')),
        $list,
      ];
    }
    return null;
  }

  /**
   * @return array
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'Daily tasks include website builds, maintenance, updates, code refactoring, etc.'
      ),
      $this->_getImplementations(),
      $this->_getProjects(),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Chichester';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(12, 2019);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
