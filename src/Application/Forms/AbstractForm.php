<?php
namespace App\Application\Forms;

use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap as BS;
use Packaged\Form\Form;
use Packaged\Form\Render\FormElementRenderer;
use Packaged\Glimpse\Core\HtmlTag;
use Packaged\Glimpse\Tags\Div;

class AbstractForm extends Form
{
  const METHOD_POST = 'post';
  const METHOD_GET = 'get';

  public function __construct(
    string $action,
    string $method = self::METHOD_POST,
    $name = null,
    $disableStartup = false
  )
  {
    parent::__construct($action, $method, $name, $disableStartup);
    $this->setAttribute('class', BS::CLEARFIX . ' ' . BS::ROW);
    $this->setAttribute('autocomplete', 'off');
    $this->showAutoSubmitButton(false);
  }

  /**
   * @param string|null $cssClass
   *
   * @return FormElementRenderer
   */
  public function renderDefault($cssClass = null)
  {
    return new FormElementRenderer(
      '<div class="form-group ' . $cssClass . '">{{label}} {{input}}</div>'
    );
  }

  /**
   * @param string      $fieldName
   * @param string|null $cssClass
   *
   * @return FormElementRenderer
   */
  public function renderCheckbox($fieldName, $cssClass = null)
  {
    $element = $this->getElement($fieldName);
    $labelText = $element->getLabel();

    return new FormElementRenderer(
      '<div class="checkbox ' . $cssClass . '">
      <label>{{input}} ' . $labelText . '</label>
      </div>'
    );
  }

  /**
   * @param string $text
   *
   * @return FormElementRenderer
   */
  public function renderSubmit($text = 'Submit')
  {
    $btn = HtmlTag::createTag('button', ['type' => 'submit'], $text);
    $btn->addClass(BS::BTN_SUCCESS, BS::FLOAT_LEFT);

    return new FormElementRenderer(Div::create($btn)->addClass(BS::COL));
  }

  /**
   * @param string $text
   *
   * @return FormElementRenderer
   */
  public function renderReset($text = 'Reset')
  {
    $btn = HtmlTag::createTag('button', ['type' => 'reset'], $text);
    $btn->addClass(BS::BTN_DANGER, BS::FLOAT_RIGHT);

    return new FormElementRenderer(
      Div::create($btn)->addClass(BS::COL_SM_6)
    );
  }

  /**
   * @return FormElementRenderer
   */
  public function renderInputOnly()
  {
    return new FormElementRenderer('{{input}}');
  }

  /**
   * @return FormElementRenderer
   */
  public function rendererRemove()
  {
    return new FormElementRenderer('');
  }

}
