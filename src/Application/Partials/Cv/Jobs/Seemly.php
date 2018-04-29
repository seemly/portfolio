<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\Paragraph;

class Seemly extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Seemly (Personal Project)';
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
    return
      [
        Paragraph::create(
          'What started out as a website portfolio and somewhat of a coding playground, ' .
          'seemly has turned into the home of 13,000+ MySQL rows containing ' .
          'historical UK domain name sales since 2006. ' .
          'The records are searchable by keyword, and many filters are provided to refine your search.'
        ),
        Paragraph::create(
          'Harvesting domain sales records is updated on a mostly daily basis, and is a fully automated process using IFTTT applets and CRON jobs.'
        ),
        Paragraph::create(
          'The reason behind such a project was an interest in the UK domain name space itself, ' .
          'and the intrigue as to any statistical trends over time, including:'
        ),
        UnorderedList::create()->addItems(
          [
            'Total sales by month',
            'Total sales by year',
            'Sales by month avg. price',
            'Sales by year avg. price',
            'Domains sold this month, \'x\' years ago',
            'Sales by domain character length',
          ]
        ),
        Paragraph::create(
          'The project also contains UK specific Bulk Whois checker with CSV export.'
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
    return $this->_createDate(6, 2015);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
