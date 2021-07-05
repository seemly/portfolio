<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Text\Paragraph;

class DomainSalesHistory extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'DomainSalesHistory.uk';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Full Stack';
  }

  /**
   * @return array
   */
  protected function _description()
  {
    $link = Link::create('https://domainsaleshistory.uk', '20k+ historic UK domain name sales records');
    $link->setTarget();

    return
      [
        Paragraph::create(
          'During the various Covid-19 lockdowns, I decided I wanted to rebuild an old personal project (seemly.co.uk) which records historic UK domain name sales.'
        ),
        Paragraph::create(
          [
            'Now with more than ',
            $link,
            ' it proves to be a useful tool in a domainers arsenal for both buyers and sellers of UK domain names.',
          ]
        ),
        Paragraph::create(
          [
            'I had never used Laravel before and I decided this would be a good way to gain exposure and learn. ',
            'Dedicating a few hours each day and at weekends to a complete rewrite of all code, after a few weeks I was able to launch the MVP and redirected all traffic from the old website to the new.',
          ]
        ),
        Paragraph::create(
          [
            'The frontend is built using the Tailwind CSS framework, which was also new to me. ',
            'As part of my learning I introduced TDD into my workflow (PHP Unit).',
          ]
        ),
        Paragraph::create(
          'Harvesting domain sales records is mostly automated, using Laravel\'s task scheduling, with unique tasks per publishing platform.'
        ),
        Paragraph::create(
          'I now have plenty of features in the backlog which I prioritise and implement over time.'
        ),
      ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return '';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(11, 2020);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
