<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap;

interface IBootstrapText extends IBootstrapTextAlignment, IBootstrapTextColour
{
  // layout
  const TEXT_NOWRAP = 'text-nowrap';
  const TEXT_TRUNCATE = 'text-truncate';

  // font weight
  const FONT_WEIGHT_BOLD = 'font-weight-bold';
  const FONT_WEIGHT_NORMAL = 'font-weight-normal';
  const FONT_WEIGHT_LIGHT = 'font-weight-light';

  // casing
  const TEXT_UPPERCASE = 'text-uppercase';
  const TEXT_LOWERCASE = 'text-lowercase';
  const TEXT_CAPITALIZE = 'text-capitalize';

  // font style
  const FONT_ITALIC = 'font-italic';
  const TEXT_MONOSPACE = 'text-monospace';

}
