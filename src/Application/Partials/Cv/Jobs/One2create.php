<?php
namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Text\Paragraph;

class One2create extends AbstractCvJobItem
{
  /**
   * @return string
   */
  protected function _employer()
  {
    return 'One2create';
  }

  /**
   * @return string
   */
  protected function _jobTitle()
  {
    return 'Junior Frontend Developer';
  }

  /**
   * @return string
   */
  protected function _description()
  {
    return [
      Paragraph::create(
        'Frontend development and maintenance for new and existing ' .
        'intranets and extranets for Inchcape Fleet Solutions.'
      ),
      Paragraph::create(
        'For the most part, this consisted of taking a default .NET template, ' .
        'and matching PSD designs provided by the design team, ' .
        'ensuring that browser support was consistent and included IE6.'
      ),
      Paragraph::create(
        'I also headed up the SEO for clients with public facing websites, ' .
        'creating monthly reports and statistics displayed in a client specific ' .
        'custom-themed micro-site.'
      ),
    ];
  }

  /**
   * @return string
   */
  protected function _location()
  {
    return 'Droxford, Southampton';
  }

  /**
   * @return HtmlTag
   */
  protected function _jobStartDate()
  {
    return $this->_createDate(9, 2008);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate(3, 2010);
  }

}
