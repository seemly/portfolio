<?php
namespace App\Application\Views\JobSearch;

use App\Application\Forms\Search\JobSearchForm;
use App\Application\Views\BaseAbstractPages\AbstractContainerPage;
use Packaged\Glimpse\Core\SafeHtml;

class JobSearchView extends AbstractContainerPage
{
  /** @var JobSearchForm */
  protected $_form;

  public function __construct(JobSearchForm $form)
  {
    $this->_form = $form;
  }

  protected function _getContent()
  {
    return [
      new SafeHtml($this->_form),
    ];
  }

}
