<?php
namespace App\Application\Controllers;

use App\Application\Controllers\Base\AbstractAppController;
use App\Application\Forms\Search\JobSearchForm;
use App\Application\Views\JobSearch\JobSearchView;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SearchController extends AbstractAppController
{

  public function getRoutes()
  {
    return [
      'jobs' => 'jobSearch',
    ];
  }

  /**
   * @return JobSearchView
   */
  public function jobSearch()
  {
    $form = new JobSearchForm($this->_getRequest()->getUri());

    return new JobSearchView($form);
  }

  /**
   * @return array
   */
  protected function _minorTldJobBoards()
  {
    return [
      'jobspotting.com',
      'ziprecruiter.com',
      'smartrecruitonline.com',
      'jobrapido.com',
      'bcsrecruit.com',
      'jooble.org',
    ];
  }

  /**
   * @return array
   */
  protected function _majorTldJobBoards()
  {
    return [
      'dice.com',
      'roc-search.com',
      'opusrecruitmentsolutions.com',
      'allthetopbananas.com',
      'computerfutures.com',
      'ziprecruiter.com',
      'jobserve.com',
      'totaljobs.com',
      'glassdoor.com',
    ];
  }

  /**
   * @return array
   */
  protected function _minorUkJobBoards()
  {
    return [
      'purelyit.co.uk',
      'itrecruituk.co.uk',
      'theecsgroup.co.uk',
      'checkasalary.co.uk',
      'jobisjob.co.uk',
      'itjobswatch.co.uk',
      'bubble-jobs.co.uk',
      'gojobsearch.co.uk',
      'independentjobs.independent.co.uk',
    ];
  }

  /**
   * @return array
   */
  protected function _majorUkJobBoards()
  {
    return [
      'indeed.co.uk',
      'monster.co.uk',
      'reed.co.uk',
      'glassdoor.co.uk',
      'spectrumit.co.uk',
      'adzuna.co.uk',
      'hays.co.uk',
      'cv-library.co.uk',
      'cwjobs.co.uk',
      'jobsite.co.uk',
      'technojobs.co.uk',
      'simplyhired.co.uk',
      'trovit.co.uk',
      'hiredonline.co.uk',
      'careerjet.co.uk',
      'checkasalary.co.uk',
    ];
  }

  /**
   * @return array
   */
  protected function _majorJobBoards()
  {
    return array_merge(
      $this->_majorUkJobBoards(),
      $this->_majorTldJobBoards()
    );
  }

  /**
   * @return array
   */
  protected function _ukOnlyJobBoards()
  {
    return array_merge(
      $this->_majorUkJobBoards(),
      $this->_minorUkJobBoards()
    );
  }

  /**
   * @return array
   */
  protected function _negativeInUrl()
  {
    return [
      'job',
      'Jobs',
      'contracts',
      'salaries',
      'it+-+telecomm',
    ];
  }

  /**
   * @return RedirectResponse
   */
  public function postJobSearch()
  {
    $request = $this->_getRequest()->request;
    $keywords = $request->get('keywords');
    $location = $request->get('location');

    $search = "'{$keywords}' AND '{$location}'";

    $ukOnly = false;
    if($ukOnly)
    {
      $search .= ' site:".co.uk"';
    }

    foreach($this->_negativeInUrl() as $term)
    {
      $search .= " -inurl:{$term}";
    }

    foreach($this->_majorUkJobBoards() as $board)
    {
      $search .= " -site:{$board}";
    }

//    foreach($this->_majorTldJobBoards() as $board)
//    {
//      $search .= " -site:{$board}";
//    }

    $encoded = urlencode($search);
    $query = preg_replace('/\s+/', '+', $encoded);
    $path = 'https://www.google.co.uk/search?q=' . $query;

    return new RedirectResponse($path);
  }

}
