<?php
namespace App\Application\Views;

use App\Application\Views\PageLayouts\ContainerPage;
use Fortifi\FontAwesome\FaIcon;

class WelcomeView extends ContainerPage
{
  protected function _getHeader()
  {
    // TODO: Implement _getHeader() method.
  }

  protected function _getHeadline()
  {
    return ['Welcome View ', FaIcon::create(FaIcon::ROCKET)];
  }

  protected function _getContent()
  {
    // TODO: Implement _getContent() method.
  }

  protected function _getFooter()
  {
    // TODO: Implement _getFooter() method.
  }

}
