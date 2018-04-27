<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Utilities;

interface IBootstrapFlex
  extends IBootstrapOrder,
          IBootstrapAlignment,
          IBootstrapSpacing,
          IBootstrapOffset
{
  // use on .row
  const NO_GUTTER = 'no-gutters';

  // column break - use on individual, empty div
  const FLEX_NEW_LINE = 'w-100';
}
