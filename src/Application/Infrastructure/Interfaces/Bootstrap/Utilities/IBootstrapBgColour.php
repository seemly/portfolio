<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Utilities;

interface IBootstrapBgColour
{
  const BG_PRIMARY = 'bg-primary';
  const BG_SECONDARY = 'bg-secondary';
  const BG_SUCCESS = 'bg-success';
  const BG_WARNING = 'bg-warning';
  const BG_INFO = 'bg-info';
  const BG_LIGHT = 'bg-light';
  const BG_DARK = 'bg-dark';
  const BG_WHITE = 'bg-white';
  const BG_TRANSPARENT = 'bg-transparent';

  /**
   * gradient (is off by default, so these won't work unless you opt in)
   *
   * http://getbootstrap.com/docs/4.1/utilities/colors/#background-gradient
   **/
  const BG_GRADIENT_PRIMARY = 'bg-gradient-primary';
  const BG_GRADIENT_SECONDARY = 'bg-gradient-secondary';
  const BG_GRADIENT_SUCCESS = 'bg-gradient-success';
  const BG_GRADIENT_WARNING = 'bg-gradient-warning';
  const BG_GRADIENT_INFO = 'bg-gradient-info';
  const BG_GRADIENT_LIGHT = 'bg-gradient-light';
  const BG_GRADIENT_DARK = 'bg-gradient-dark';
  const BG_GRADIENT_WHITE = 'bg-gradient-white';
}
