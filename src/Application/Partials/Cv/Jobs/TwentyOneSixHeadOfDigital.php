<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
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
    return 'Full Stack Developer';
  }

  /**
   * @return UnorderedList
   */
  protected function _getImplementations()
  {
    $list = UnorderedList::create();
    $list->addItem(
      'Mentoring a 2nd year intern from Solent University, taking into consideration his current knowledge alongside the upcoming units within his 3rd year, planning tasks and projects that will optimise his learning.'
    );
    $list->addItem(
      'Instigating the documentation of our current project process map to discover issues and / or bottlenecks.'
    );
    $list->addItem(
      'Restructuring of project management, improving visibility and scheduling to allow the Client Services team to better manage client expectations.'
    );
    $list->addItem(
      'Initiating project debriefs to ensure cross department internal processes are optimal, primarily to avoid repetitive issues per project type.'
    );
    $list->addItem('Heading up internal learning lunches, whilst also promoting & planning individual staff training.');
    $list->addItem('Proactive mentality towards suggesting optimisations and improvements to client websites.');
    $list->addItem(
      'Developing a company intranet to document procedures, requirements for project briefs, rate sheets for project types, and "How To" guides.'
    );
    $list->addItem(
      'Create a boilerplate containing common components and functionality for rapid development of Wordpress based brochure websites.'
    );
    return $list;
  }

  /**
   * @return array
   */
  protected function _getProperFoodCompanyProjects()
  {
    $list = UnorderedList::create();
    $list->addItem($this->_createOutboundLink('Absolute Taste', 'https://www.absolutetaste.com/'));
    $list->addItem($this->_createOutboundLink('Absolute Taste Food', 'https://www.absolutetastefood.com/'));
    $list->addItem($this->_createOutboundLink('Absolute Taste Inflight', 'https://www.absolutetasteinflight.com/'));

    return [
      HeadingFive::create('The Proper Food & Drink Company'),
      Paragraph::create(
        'The Proper Food & Drink Company requested a web presence for each of their brands. To maintain consistency the primary brand colours were used as emphasis, alongside some minor functional differences across each website.'
      ),
      Paragraph::create(
        [
          'Built on Wordpress using the fantastic MVC boilerplate developed by Rareloop; ',
          $this->_getLumberjackLink(),
        ]
      ),
      $list,
    ];
  }

  /**
   * @return array
   */
  protected function _getMorningsideCostCalculatorProject()
  {
    $list = UnorderedList::create();
    $list->addItem($this->_createOutboundLink('Cost Savings Calculator', 'https://savings.morningsidehealthcare.com'));

    return [
      HeadingFive::create('Morningside Healthcare - Cost Savings Calculator'),
      Paragraph::create(
        'Morningside Healthcare wanted a marketing tool to help their sales team generate sales for the various medications they sell nationwide and used as an online lead generation tool.'
      ),
      Paragraph::create(
        [
          'A bespoke PHP application built using the ',
          $this->_getCubexLink('Cubex MVC Framework'),
          ', the savings are calculated from CSVs of units sold per CCG (location), product and dosage, multiplied by Morningside equivalent product price.',
        ]
      ),
      $list,
    ];
  }

  /**
   * @return array
   */
  protected function _get21sixProject()
  {
    $list = UnorderedList::create();
    $list->addItem($this->_createOutboundLink('21six', 'https://21six.com'));

    return [
      HeadingFive::create('21six.com'),
      Paragraph::create(
        'Updated an aging website with a fresh new platform to showcase our work in an eye-catching way, under the direction of the creative director.'
      ),
      Paragraph::create(
        [
          'The website is built in Wordpress using the ',
          $this->_getLumberjackLink('Lumberjack Framework'),
          ', enabling an OO PHP methodology to development, TWIG templating for markup, alongside usage of BEM and SCSS for styling.',
        ]
      ),
      Paragraph::create(
        'Advanced Custom Fields (ACF) is used to create reusable custom components, to provide a Page Builder like interface for website content administrators.'
      ),
      $list,
    ];
  }

  /**
   * @return array
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'Daily tasks include website builds, maintenance, updates, infrastructure improvements, code refactoring, etc.'
      ),
      Paragraph::create(BoldText::create('Implementations;')),
      $this->_getImplementations(),
      Paragraph::create(BoldText::create('Projects;')),
      $this->_getProperFoodCompanyProjects(),
      $this->_getMorningsideCostCalculatorProject(),
      $this->_get21sixProject(),
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
