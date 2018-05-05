<?php
namespace App\Application\Infrastructure\Ui;

use App\Application\Infrastructure\Traits\Ui\UiAttributeTrait;
use App\Application\Infrastructure\Traits\Ui\UiContentTrait;
use Packaged\Glimpse\Core\SafeHtml;

abstract class AbstractUiComponent
{
  use UiContentTrait;
  use UiAttributeTrait;

  abstract protected function _render();

  /**
   * @return SafeHtml
   */
  public function render()
  {
    return new SafeHtml($this->_render());
  }

}
