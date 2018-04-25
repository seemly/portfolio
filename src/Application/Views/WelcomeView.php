<?php
namespace App\Application\Views;

use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Fortifi\FontAwesome\FaIcon;
use Packaged\Glimpse\Tags\Text\HeadingOne;

class WelcomeView extends AbstractContainerPage
{

  protected function _getContent()
  {
    return HeadingOne::create(['Welcome View ', FaIcon::create(FaIcon::ROCKET)]);
  }

}
