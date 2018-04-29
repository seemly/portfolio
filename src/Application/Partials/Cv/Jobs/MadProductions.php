<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\Paragraph;

class MadProductions extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'Mad Productions';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Frontend Developer';
  }

  /**
   * @return array
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'Part of a 3-man front-end development team, building and maintaining multiple e-commerce websites using an in-house proprietary .NET store management application, including;'
      ),
      UnorderedList::create()->addItems(
        [
          'onlinegolf.co.uk',
          'americangolf.co.uk',
          'rigbyandpeller.co.uk',
          'lights4fun.co.uk',
          'zeeandco.co.uk',
          'dephoto.biz',
          'jakss.co.uk',
        ]
      ),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'North Baddesley, Southampton';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(3, 2010);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(10, 2012);
  }

}
