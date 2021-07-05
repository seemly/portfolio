<?php

namespace App\Application\Partials\Cv\Jobs;

use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Elements\LineBreak;
use Packaged\Glimpse\Tags\Link;
use Packaged\Glimpse\Tags\Lists\UnorderedList;
use Packaged\Glimpse\Tags\Text\BoldText;
use Packaged\Glimpse\Tags\Text\HeadingFive;
use Packaged\Glimpse\Tags\Text\Paragraph;

class TwentyOneSixFrontendDeveloper extends AbstractCvJobItem
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
    $companyWebsite = Link::create("https://21six.com", "Company website");
    $companyWebsite->setTarget();

    $projects = UnorderedList::create();
    $projects->addItem(
      'Collaborate with internal teams to ensure we provide optimal solutions to the clients problems.'
    );
    $projects->addItem('Performance optimisations and some refactoring of code for new feature implementations.');
    $projects->addItem('Client websites functional updates and bug fixes.');

    return [
      $this->_animatedBanners(),
      $this->_htmlEmailDevelopment(),
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
    return $this->_createDate(3, 2019);
  }

}
