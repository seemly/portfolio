<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\BoldText;
use Packaged\Glimpse\Tags\Text\HeadingFive;
use Packaged\Glimpse\Tags\Text\Paragraph;

class TwentyOneSix extends AbstractCvJobItem
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
    return 'Frontend & PHP Web Developer';
  }

  /**
   * @return array
   */
  protected function _leukaemiaBusters()
  {
    $rareloop   = $this->_createOutboundLink('RareLoop', 'https://rareloop.com');
    $lumberjack = $this->_createOutboundLink('Lumberjack', 'https://github.com/Rareloop/lumberjack');
    $projectUrl = $this->_createOutboundLink('Leukaemia Busters', 'http://leukaemiaBusters.org.uk');
    $astrum     = $this->_createOutboundLink('Astrum', 'https://github.com/NoDivide/astrum');

    return [
      HeadingFive::create('Leukaemia Busters'),
      Paragraph::create(
        [
          'Employed as a Frontend focused PHP developer, one of my first tasks at 21six was to re-create the ',
          $projectUrl,
          ' charity website (previously built on Joomla) using the fantastic Wordpress framework ',
          $lumberjack,
          ', developed by the team at ',
          $rareloop,
          '.',
        ]
      ),
      Paragraph::create(
        [
          'Having limited previous exposure to Wordpress itself, this was both an interesting and enjoyable task to undertake. ',
          'I decided to also implement a pattern library using ',
          $astrum,
          ' to further improve consistency on the project.',
        ]
      ),
      Paragraph::create(HtmlTag::createTag('small', [], '(Project is ongoing, and is yet to go live)')),
      LineBreak::create(),
    ];
  }

  /**
   * @return array
   */
  protected function _chalkstring()
  {
    $rareloop   = $this->_createOutboundLink('RareLoop', 'https://rareloop.com');
    $lumberjack = $this->_createOutboundLink('Lumberjack', 'https://github.com/Rareloop/lumberjack');
    $projectUrl = $this->_createOutboundLink('Chalkstring', 'http://chalkstring.com');

    return [
      HeadingFive::create('Chalkstring - Wordpress'),
      Paragraph::create(
        [
          $projectUrl,
          ' is a wordpress website built using the ',
          $lumberjack,
          ' framework (developed by the team at ',
          $rareloop,
          ').',
        ]
      ),
      Paragraph::create(
        [
          'Lumberjack allows for an Object Oriented approach to wordpress theme development,' .
          ' with Twig used for templating the HTML, implementing the BEM methodology for styling components,' .
          ' and the fantastic ACF (Advanced Custom Fields) plugin is used for creating flexible, customisable and re-usable modules.'
        ]
      ),
      Paragraph::create(
        [
          'One of my aims for this project was to build components in such a way that they can be used in future projects, minimising development time.',
        ]
      ),
      LineBreak::create(),
    ];
  }

  /**
   * @return array
   */
  protected function _htmlEmailDevelopment()
  {
    $tasks = UnorderedList::create();
    $tasks->addItem('Optimising images.');
    $tasks->addItem('Compiling CSS and HTML through Pre-mailer API.');
    $tasks->addItem('BrowserSync to auto-reload changes.');
    $tasks->addItem('Create screen-shot of email.');

    return [
      HeadingFive::create('HTML Emails'),
      Paragraph::create('Being a digital agency, there is a steady stream of HTML emails that need developing.'),
      Paragraph::create(
        'With this in mind, and knowing that we also have freelance developers that build emails for us from time to time, I decided to take it upon myself to create and document a workflow which incorporates a task manager (Grunt) to automate a bunch of the repetitive tasks, including:'
      ),
      $tasks,
      Paragraph::create(
        'This workflow can be refined over time, but it has provided a solid starting point in reducing the time taken to develop quite dramatically.'
      ),
      Paragraph::create(
        'All emails are tested in Litmus, ensuring the design met an acceptable consistency across all email clients.'
      ),
      LineBreak::create(),
    ];
  }

  /**
   * @return array
   */
  protected function _animatedBanners()
  {
    return [
      HeadingFive::create('Animated HTML5 Banners (Google Web Designer)'),
      Paragraph::create(
        'The development of HTML5 animated banners was another regular task I undertook.'
      ),
      Paragraph::create(
        'With experience of Adobe Flash at the start of my career, this helped me and my learning curve using Google Web Designer as an application when building the banners.'
      ),
      LineBreak::create(),
    ];
  }

  /**
   * @return array
   */
  protected function _description()
  {
    $companyWebsite = Link::create("http://21six.com", "Company website");
    $companyWebsite->setTarget();

    $projects = UnorderedList::create();
    $projects->addItem('Collaborate with internal teams to ensure we provide optimal solutions to the clients problems.');
    $projects->addItem('Performance optimisations and some refactoring of code for new feature implementations.');
    $projects->addItem('Client websites functional updates and bug fixes.');

    return [
      $this->_chalkstring(),
      $this->_htmlEmailDevelopment(),
      $this->_animatedBanners(),
      Paragraph::create(BoldText::create('Additional Tasks;')),
      $projects,
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
    return $this->_createDate(8, 2018);
  }

  /**
   * @return HtmlTag
   */
  protected function _jobEndDate()
  {
    return $this->_createDate();
  }

}
