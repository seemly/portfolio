<?php
namespace App\Application\Partials\Cv\Jobs;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Span;
use Packaged\Glimpse\Tags\Text\HeadingFour;
use Packaged\Glimpse\Tags\Text\HeadingThree;
use Packaged\Glimpse\Tags\Text\Paragraph;

abstract class AbstractCvJobItem
{
  static public function i()
  {
    $self = new static();
    return $self->render();
  }

  /**
   * @return string
   */
  abstract protected function _employer();

  /**
   * @return string
   */
  abstract protected function _jobTitle();

  /**
   * @return string
   */
  abstract protected function _description();

  /**
   * @return HtmlTag
   */
  abstract protected function _jobStartDate();

  /**
   * @return HtmlTag
   */
  abstract protected function _jobEndDate();

  /**
   * 0 depicts current/present
   *
   * @param int $month
   * @param int $year
   *
   * @return HtmlTag
   */
  protected function _createDate($month = 0, $year = 0)
  {
    if($year === 0)
    {
      $date = 'Current';
    }
    else
    {
      $dateObj = \DateTime::createFromFormat('!m', $month);
      $monthName = $dateObj->format('F');

      $date = date('M Y', strtotime("{$monthName} {$year}"));
    }

    return HtmlTag::createTag('em', [], $date);
  }

  /**
   * @return Div
   */
  protected function _getDates()
  {
    return Div::create(
      [
        Span::create(
          [
            $this->_jobStartDate(),
            ' - ',
            $this->_jobEndDate(),
          ]
        )->addClass(BS::DISPLAY_BLOCK),
        Span::create('Portsmouth')->addClass(BS::DISPLAY_BLOCK, BS::TEXT_RIGHT),
      ]
    )->addClass('dates');
  }

  /**
   * @return Div
   */
  public function render()
  {
    return Div::create(
      Div::create(
        [
          $this->_getDates(),
          HeadingThree::create($this->_employer())->addClass('employer'),
          HeadingFour::create($this->_jobTitle())->addClass('job-title', BS::MB_4),
          Div::create($this->_description())->addClass('description'),
        ]
      )->addClass(BS::COL_SM_12, BS::PY_3, BS::BORDER_TOP)
    )->addClass('job', BS::ROW);
  }
}
