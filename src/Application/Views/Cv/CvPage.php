<?php
namespace App\Application\Views\Cv;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Lists\ListItem;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\HeadingOne;
use Packaged\Glimpse\Tags\Text\HeadingThree;
use Packaged\Glimpse\Tags\Text\HeadingTwo;
use Packaged\Glimpse\Tags\Text\Paragraph;
use Packaged\Helpers\Strings;

class CvPage extends AbstractContainerPage
{
  protected $_name = 'Chris Sparshott';
  protected $_jobTitle = 'PHP Web Developer / Frontend Developer';

  /**
   * @return Div
   */
  protected function _intro()
  {
    return Div::create(
      [
        Div::create(
          [
            HeadingOne::create($this->_name),
            Paragraph::create($this->_jobTitle)->addClass(BS::FONT_ITALIC),
          ]
        )->addClass(BS::COL_MD_8),
        Div::create()->addClass(BS::COL_MD_4),
      ]
    )->addClass(BS::ROW, 'intro');
  }

  /**
   * @param string $name
   * @param mixed  $content
   *
   * @return Div
   */
  protected function _section($name, $content)
  {
    $className = Strings::stringToCamelCase($name);

    return Div::create(
      [
        Div::create(HeadingTwo::create($name))->addClass(BS::COL_MD_4),
        Div::create($content)->addClass(BS::COL),
      ]
    )->addClass(BS::ROW, BS::JUSTIFY_CONTENT_SM_CENTER, $className, 'section');
  }

  /**
   * @return Div
   */
  protected function _getProfileSection()
  {
    $content = 'Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change.';

    return $this->_section('Profile', $content);
  }

  /**
   * @param string $title
   * @param string $content
   *
   * @return Div
   */
  protected function _createSkill($title, $content)
  {
    return Div::create(
      [
        HeadingThree::create($title),
        Paragraph::create($content),
      ]
    )->addClass(BS::COL_LG_4, 'skill');
  }

  /**
   * @return Div
   */
  protected function _getSkillsSection()
  {
    $dummy = 'Assertively exploit wireless initiatives rather than synergistic core competencies.';

    $skills = Div::create(
      [
        $this->_createSkill('HTML & CSS', $dummy),
        $this->_createSkill('Javascript', $dummy),
        $this->_createSkill('PHP & MySQL', $dummy),
      ]
    )->addClass(BS::ROW);

    return $this->_section('Skills', $skills);
  }

  /**
   * @return Div
   */
  protected function _getTechnicalSection()
  {
    $items = [
      'XHTML',
      'CSS',
      'Javascript',
      'jQuery',
      'PHP',
      'MySQL',
      'GIT',
      'Photoshop',
      'Mac OS',
      'Windows OS',
    ];

    $lists = Div::create()->addClass(BS::ROW);
    $chunks = array_chunk($items, ceil(count($items) / 3));
    foreach($chunks as $chunk)
    {
      $list = UnorderedList::create();
      $list->addClass(BS::LIST_GROUP_FLUSH, BS::COL_SM_4, BS::PX_0);

      foreach($chunk as $item)
      {
        $li = ListItem::create($item);
        $li->addClass(BS::LIST_GROUP_ITEM, BS::BG_TRANSPARENT);

        $list->addItem($li);
      }

      $lists->appendContent($list);
    }

    return $this->_section('Technical', $lists);
  }

  /**
   * @return Div
   */
  protected function _getExperienceSection()
  {
    return $this->_section('Experience', 'blah');
  }

  /**
   * @return Div
   */
  protected function _getEducationSection()
  {
    return $this->_section('Education', 'blah');
  }

  /**
   * @return array
   */
  protected function _getContent()
  {
    return [
      $this->_intro(),
      $this->_getProfileSection(),
      $this->_getSkillsSection(),
      $this->_getTechnicalSection(),
      $this->_getExperienceSection(),
      $this->_getEducationSection(),
    ];
  }

}
