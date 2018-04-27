<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap;

use App\Application\Infrastructure\Interfaces\Bootstrap\Components\IBootstrapComponents;
use App\Application\Infrastructure\Interfaces\Bootstrap\Utilities\IBootstrapUtilities;

interface IBootstrap extends IBootstrapLayout,
                             IBootstrapUtilities,
                             IBootstrapComponents
{
}
