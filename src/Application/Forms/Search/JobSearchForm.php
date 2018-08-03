<?php
namespace App\Application\Forms\Search;

use App\Application\Forms\AbstractForm;
use App\Application\Infrastructure\Enums\Bootstrap\Bootstrap;

class JobSearchForm extends AbstractForm
{
  /**
   * @label Search Term
   * @required
   * @inputType text
   */
  public $keywords;
  /**
   * @label Location
   * @required
   * @inputType text
   */
  public $location;
  /**
   * @nolabel
   * @inputType submit
   */
  public $submit;

  /**
   * @return string
   */
  public function render()
  {
    $this->setAttribute('target', '_blank');

    $keywords = $this->getElement('keywords');
    $keywords->setRenderer($this->renderDefault(Bootstrap::COL_SM_8));
    $keywords->setAttribute('class', 'form-control');

    $location = $this->getElement('location');
    $location->setRenderer($this->renderDefault(Bootstrap::COL_SM_4));
    $location->setAttribute('class', 'form-control');

    $submit = $this->getElement('submit');
    $submit->setRenderer($this->renderSubmit());

    // hydrate
    $this->setValue('keywords', 'frontend developer');
    $this->setValue('location', 'fareham');

    return parent::render();
  }

}
