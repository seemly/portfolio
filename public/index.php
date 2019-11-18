<?php
//Defining PHP_START will allow cubex to add an execution time header
define('PHP_START', microtime(true));

//Include the composer autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

//Create an instance of cubex, with the web root defined
$cubex = new \Cubex\Cubex(__DIR__);
$cubex->boot();

//Create and configure a new dispatcher
$dispatcher = new \Packaged\Dispatch\Dispatch(
  $cubex,
  $cubex->getConfiguration()->getSection('dispatch')
);

//Set the correct working directory for dispatcher
$dispatcher->setBaseDirectory(dirname(__DIR__));

//Load in the cache of file hashes to improve performance of dispatched assets
$fileHash = 'conf/dispatch.filehash.ini';
if(file_exists($fileHash))
{
  $hashTable = parse_ini_file($fileHash, false);
  if(!empty($hashTable))
  {
    $dispatcher->setFileHashTable($hashTable);
  }
}

$stack = new \Stack\Builder();
// Uncomment to handle cookies
//$stack->push('Illuminate\Cookie\Queue', $cubex['cookie']);
// Inject dispatch to handle assets
$stack->push([$dispatcher, 'prepare']);

// Resolve the stack
$app = $stack->resolve($cubex);

//Create a request object
$request = \Cubex\Http\Request::createFromGlobals();

//Tell Cubex to handle the request, and do its magic
$response = $app->handle($request);

//Send the generated response to the user
$response->send();

//Shutdown Cubex
$app->terminate($request, $response);
