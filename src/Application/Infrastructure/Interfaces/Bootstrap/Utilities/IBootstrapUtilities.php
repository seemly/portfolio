<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Utilities;

interface IBootstrapUtilities
  extends IBootstrapFlex,
          IBootstrapBorders,
          IBootstrapText,
          IBootstrapBgColour,
          IBootstrapFloat,
          IBootstrapShadow
{
  const CLEARFIX = 'clearfix';

  // positions
  const POSITION_STATIC = 'static';
  const POSITION_RELATIVE = 'relative';
  const POSITION_ABSOLUTE = 'absolute';

  const POSITION_FIXED = 'fixed';
  const POSITION_FIXED_TOP = 'fixed-top';
  const POSITION_FIXED_BOTTOM = 'fixed-bottom';

  const POSITION_STICKY = 'sticky';
  const POSITION_STICKY_TOP = 'sticky-top';
  const POSITION_STICKY_BOTTOM = 'sticky-bottom';

  // accessibility
  const SCREENREADERS_ONLY = 'sr-only sr-only-focusable';
}
