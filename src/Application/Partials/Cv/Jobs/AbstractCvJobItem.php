<?php
namespace App\Application\Partials\Cv\Jobs;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Span;
use Packaged\Glimpse\Tags\Text\HeadingFour;
use Packaged\Glimpse\Tags\Text\HeadingThree;

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
   * @return string
   */
  abstract protected function _location();

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
  protected function _getJobMeta()
  {
    return Div::create(
      [
        Span::create(
          [
            $this->_jobStartDate(),
            ' - ',
            $this->_jobEndDate(),
          ]
        )->addClass('dates', BS::DISPLAY_BLOCK, BS::TEXT_RIGHT),
        Span::create(
          $this->_location()
        )->addClass('location', BS::DISPLAY_BLOCK, BS::TEXT_RIGHT),
      ]
    )->addClass('meta');
  }

  /**
   * @param string $text
   * @param string $url
   *
   * @return static
   */
  protected function _createOutboundLink(string $text, string $url)
  {
    $link = Link::create($url, $text);
    $link->setTarget()->setAttribute('rel', 'nofollow');
    return $link;
  }

  /**
   * @return Div
   */
  public function render()
  {
    return Div::create(
      Div::create(
        [
          $this->_getJobMeta(),
          HeadingThree::create($this->_employer())->addClass('employer'),
          HeadingFour::create($this->_jobTitle())->addClass('job-title', BS::MB_4),
          Div::create($this->_description())->addClass('description'),
        ]
      )->addClass(BS::COL_SM_12, BS::PY_3, BS::BORDER_TOP)
    )->addClass('job', BS::ROW);
  }
}
