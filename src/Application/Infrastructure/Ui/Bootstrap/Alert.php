<?php
namespace App\Application\Infrastructure\Ui\Bootstrap;

use App\Application\Infrastructure\Interfaces\Ui\AlertType;
use App\Application\Infrastructure\Ui\AbstractUiComponent;
use Packaged\Glimpse\Tags\Div;

class Alert extends AbstractUiComponent implements AlertType
{
  /**
   * @param        $message
   * @param string $type
   */
  public function __construct($message, string $type = self::ALERT_SUCCESS)
  {
    $this->setContent($message);
    $this->addClass($type);
  }

  /**
   * @param        $message
   * @param string $type
   *
   * @return static
   */
  static public function i($message, string $type = self::ALERT_SUCCESS)
  {
    $self = new static($message, $type);
    return $self;
  }

  /**
   * @return Div
   */
  protected function _render()
  {
    $alert = Div::create($this->getContent());
    $alert->setAttributes($this->getAttributes());
    return $alert;
  }

}
