<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\BoldText;
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
    $projects = UnorderedList::create();
    $projects->addItem(
      [
        "With PSD's provided, I built the ",
        $this->_createOutboundLink('Fortifi website', 'http://fortifi.io'),
        " based on Google Material framework, ",
        $this->_createOutboundLink('MDL', 'https://getmdl.io'),
        ".",
      ]
    );

    // AnalysisPro
    $projects->addItem(
      [
        'Josh, from ',
        $this->_createOutboundLink('AnalysisPro', 'http://www.analysispro.com'),
        ' required a new website to be built on WordPress.',
        ' I developed the theme from designs that were created in-house at Fortifi,' .
        ' and the website was launched in June, 2018.',
      ]
    );

    // Enjoy Fitness
    $projects->addItem(
      [
        'Mark, from ',
        $this->_createOutboundLink('Enjoy Fitness', 'http://www.enjoyfitnessstudio.co.uk'),
        ' wanted to amalgamate the 2 websites he was currently hosting/managing into one,' .
        ' and the new website was to be built on WordPress.',
        ' I developed the theme from designs that were created in-house at Fortifi,' .
        ' and the website was launched in August, 2018.',
      ]
    );


    return [
      Paragraph::create(
        'Front-end focused PHP developer, creating reusable components and pages using PHP, HTML, CSS and jQuery ' .
        'for an all encompassing cloud based business solution, including: ' .
        'marketing, CRM, support, billing and email services.'
      ),
      Paragraph::create(BoldText::create('Additional projects;')),
      $projects,
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
    return $this->_createDate(8, 2018);
  }

}
