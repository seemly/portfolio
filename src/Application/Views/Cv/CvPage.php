<?php
namespace App\Application\Views\Cv;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use App\Application\Infrastructure\Meta\Paths;
use App\Application\Infrastructure\Meta\Personal;
use App\Application\Partials\Cv\Jobs\AbacusEmedia;
use App\Application\Partials\Cv\Jobs\Fortifi;
use App\Application\Partials\Cv\Jobs\JustDevelopIt;
use App\Application\Partials\Cv\Jobs\MadProductions;
use App\Application\Partials\Cv\Jobs\One2create;
use App\Application\Partials\Cv\Jobs\Seemly;
use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Div;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Lists\ListItem;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\HeadingOne;
use Packaged\Glimpse\Tags\Text\HeadingThree;
use Packaged\Glimpse\Tags\Text\HeadingTwo;
use Packaged\Glimpse\Tags\Text\Paragraph;
use Packaged\Helpers\Strings;

class CvPage extends AbstractContainerPage
{
  /**
   * @param $str
   *
   * @return mixed
   */
  protected function _cleanUrl($str)
  {
    return str_replace(['http://', 'https://'], '', $str);
  }

  /**
   * @param string      $url
   * @param string      $content
   * @param string|null $tooltip
   *
   * @return Link
   */
  protected function _createContactLink($url, $content, $tooltip = null)
  {
    $link = Link::create($url, $content);
    $link->setTarget();

    if(is_string($tooltip))
    {
      $link->setAttribute('title', $tooltip);
      $link->setAttribute('data-toggle', 'tooltip');
    }

    return $link;
  }

  /**
   * @return Link
   */
  protected function _getEmail()
  {
    $email = Personal::EMAIL;
    return $this->_createContactLink("mailto:{$email}", $email);
  }

  /**
   * @return Link
   */
  protected function _getPhone()
  {
    $phone = Personal::MOBILE;
    return $this->_createContactLink("tel:{$phone}", $phone);
  }

  /**
   * @return Link
   */
  protected function _getLinkedIn()
  {
    return $this->_createContactLink(
      Personal::LINKEDIN,
      $this->_cleanUrl(Personal::LINKEDIN),
      'LinkedIn Profile'
    );
  }

  /**
   * @return Link
   */
  protected function _getGithub()
  {
    return $this->_createContactLink(
      Personal::GITHUB,
      $this->_cleanUrl(Personal::GITHUB),
      'Github Profile'
    );
  }

  /**
   * @return Link
   */
  protected function _getTwitter()
  {
    return $this->_createContactLink(
      Personal::TWITTER,
      $this->_cleanUrl(Personal::TWITTER),
      'Twitter Profile'
    );
  }

  /**
   * @return Link
   */
  protected function _getPortfolio()
  {
    return $this->_createContactLink(
      Personal::PORTFOLIO,
      $this->_cleanUrl(Personal::PORTFOLIO),
      'Personal website / portfolio'
    );
  }

  /**
   * @return array
   */
  protected function _contactDetails()
  {
    return [
      $this->_getEmail(),
      LineBreak::create(),
      $this->_getPhone(),
    ];
  }

  /**
   * @return Div
   */
  protected function _getDownload()
  {
    $link = Link::create(Paths::CV_DOWNLOAD, 'Download CV');
    $link->addClass(BS::BTN_PRIMARY, BS::BTN_SM);
    return Div::create($link)->addClass(BS::MB_2);
  }

  /**
   * @return Div
   */
  protected function _getIntroRight()
  {
    return Div::create(
      [
        $this->_getDownload(),
        $this->_contactDetails(),
      ]
    )->addClass(
      BS::COL_LG_5,
      BS::TEXT_LG_RIGHT,
      BS::DISPLAY_NONE,
      BS::DISPLAY_BLOCK_LG
    );
  }

  /**
   * @return Div
   */
  protected function _intro()
  {
    return Div::create(
      [
        Div::create(
          [
            HeadingOne::create(Personal::NAME),
            Div::create(Personal::JOB_TITLE)->addClass(BS::FONT_ITALIC),
            Div::create(
              [
                $this->_getGithub(),
                ' / ',
                $this->_getPortfolio(),
              ]
            )->addClass(BS::FONT_ITALIC),
          ]
        )->addClass(BS::COL_LG_7),
        $this->_getIntroRight(),
      ]
    )->addClass(BS::ROW, BS::ALIGN_ITEMS_END, 'intro');
  }

  /**
   * @param string $name
   * @param mixed  $content
   *
   * @return Div
   */
  protected function _section($name, $content)
  {
    $heading = Div::create(HeadingTwo::create($name));
    $heading->addClass(BS::COL_LG_2, BS::MB_3);

    $contentColumn = Div::create($content)->addClass(BS::COL);

    $section = Div::create([$heading, $contentColumn]);
    $section->addClass('section', Strings::stringToCamelCase($name));
    $section->addClass(BS::ROW, BS::JUSTIFY_CONTENT_SM_CENTER);
    return $section;
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
      'HTML / CSS',
      'Javascript / jQuery',
      'PHP / MySQL',
      'GIT',
      'Photoshop',
    ];

    $lists = Div::create()->addClass(BS::ROW);
    $chunks = array_chunk($items, ceil(count($items) / 3));
    foreach($chunks as $chunk)
    {
      $list = UnorderedList::create();
      $list->addClass(BS::PX_3, BS::MY_0);
      foreach($chunk as $item)
      {
        $li = ListItem::create($item);
        $li->addClass(BS::BG_TRANSPARENT, BS::BORDER_0, BS::PY_1);
        $list->addItem($li);
      }
      $lists->appendContent(Div::create($list)->addClass(BS::COL_LG_4));
    }

    return $this->_section('Technical', $lists);
  }

  /**
   * @return Div
   */
  protected function _getExperienceSection()
  {
    return $this->_section(
      'Experience',
      [
        Fortifi::i(),
        Seemly::i(),
        AbacusEmedia::i(),
        JustDevelopIt::i(),
        MadProductions::i(),
        One2create::i(),
      ]
    );
  }

  /**
   * @return Div
   */
  protected function _getEducationSection()
  {
    return $this->_section('Education', 'blah');
  }

  /**
   * @return Div
   */
  protected function _getInterestsSection()
  {
    return $this->_section(
      'Interests',
      [
        UnorderedList::create()->addItems(
          [
            'Since Summer 2016 I have been a keen runner. ' .
            'In December of 2017 I ran my first marathon in Portsmouth.',

            'As a member of my local running club - Gosport Road Runners - ' .
            'in March 2018 I created a club mascot called \'Hugh\' using Adobe Illustrator. ' .
            'It is currently going through the process of member introduction, ' .
            'ready for printing on club attire and for media use.',

            'I genuinely enjoy learning new skills, so I subscribe to Lynda.com ' .
            'and watch video courses related to my industry including; JS, PHP, ' .
            'Online Marketing and Illustrator.',
          ]
        ),
      ]
    );
  }

  /**
   * @return Div
   */
  protected function _linksSection()
  {
    return $this->_section(
      'Links',
      [
        UnorderedList::create()->addItems(
          [
            $this->_getPortfolio(),
            $this->_getGithub(),
            $this->_getLinkedIn(),
            $this->_getTwitter(),
          ]
        ),
        $this->_getDownload(),
      ]
    );
  }

  /**
   * @return Div
   */
  protected function _getContent()
  {
    return Div::create(
      [
        $this->_intro(),
        $this->_getProfileSection(),
        //        $this->_getSkillsSection(),
        $this->_getTechnicalSection(),
        $this->_getExperienceSection(),
        //        $this->_getEducationSection(),
        $this->_getInterestsSection(),
        $this->_linksSection(),
      ]
    )->addClass(BS::P_5, BS::MX_3);
  }

}
