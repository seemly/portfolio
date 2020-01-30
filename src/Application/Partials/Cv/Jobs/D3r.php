<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\HeadingFive;
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
  protected function _getMaintenanceProjects()
  {
    $fine = $this->_createOutboundLink('Fine', 'http://finexfine.com');

    $list = UnorderedList::create();
    $list->addItem($fine);
    $list->addItem($this->_createOutboundLink('Gemini Data Loggers', 'https://www.geminidataloggers.com'));
    $list->addItem($this->_createOutboundLink('The Beaumont', 'https://www.thebeaumont.com'));
    $list->addItem($this->_createOutboundLink('Aspinal', 'https://www.aspinaloflondon.com'));
    $list->addItem($this->_createOutboundLink('West Dean College', 'https://www.westdean.org.uk'));

    return [
      HeadingFive::create('Daily Tasks'),
      Paragraph::create(
        'During my time at D3R I worked within the support and maintenance team, implementing bug fixes and new features.'
      ),
      Paragraph::create(
        [
          'One of the larger pieces of work I completed was for ',
          $fine,
          ', a membership only website with a highly exclusive product range. ' .
          'I was tasked with updating the home page to promote the type of products available for purchase, ' .
          'and allowing prospective members to read selected featured articles to entice membership applications.'
        ]
      ),
      HeadingFive::create('Client Projects'),
      Paragraph::create('The following is a list of client websites where I would fix bugs and add new functionality as requested:'),
      $list,
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
