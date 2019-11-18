<?php
namespace Tests;

use Cubex\Testing\CubexTestCase;
use Cubex\View\Layout;

class ProjectTest extends CubexTestCase
{
  public function testProjectIsCubexKernel()
  {
    $this->assertInstanceOf(
      '\Cubex\Kernel\CubexKernel',
      $this->getCubex()->make('\Cubex\Kernel\CubexKernel')
    );
  }

  public function testDefaultAction()
  {
    $this->getResponse('/');
    $this->assertResponseContains('Welcome to Cubex');
    $this->assertResponseContains('framework and build something awesome');
    $this->assertResponseOk();
    $this->assertReturnsCubexResponse();
    $this->assertReturnsViewModel();

    $original = $this->getLastResponse()->getOriginal();
    if($original instanceof Layout)
    {
      $view = $original->get('content');
      $this->assertInstanceOf('\Skeleton\Application\Views\WelcomeView', $view);
    }
  }

  public function testHello()
  {
    $this->getResponse('/hello');
    $this->assertResponseContains('Hello World');
  }

  public function testHi()
  {
    $this->getResponse('/hi');
    $this->assertRedirectedTo('/hello/world');
  }
}
