<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Utilities;

interface IBootstrapBorders
{
  const BORDER = 'border';
  const BORDER_TOP = self::BORDER . '-top';
  const BORDER_RIGHT = self::BORDER . '-right';
  const BORDER_BOTTOM = self::BORDER . '-bottom';
  const BORDER_LEFT = self::BORDER . '-left';

  // subtractive
  const BORDER_0 = self::BORDER . '-0';
  const BORDER_TOP_0 = self::BORDER_TOP . '-0';
  const BORDER_RIGHT_0 = self::BORDER_RIGHT . '-0';
  const BORDER_BOTTOM_0 = self::BORDER_BOTTOM . '-0';
  const BORDER_LEFT_0 = self::BORDER_LEFT . '-0';

  // border colour
  const BORDER_PRIMARY = self::BORDER . ' ' . self::BORDER . '-primary';
  const BORDER_SECONDARY = self::BORDER . ' ' . self::BORDER . '-secondary';
  const BORDER_SUCCESS = self::BORDER . ' ' . self::BORDER . '-success';
  const BORDER_DANGER = self::BORDER . ' ' . self::BORDER . '-danger';
  const BORDER_WARNING = self::BORDER . ' ' . self::BORDER . '-warning';
  const BORDER_INFO = self::BORDER . ' ' . self::BORDER . '-info';
  const BORDER_LIGHT = self::BORDER . ' ' . self::BORDER . '-light';
  const BORDER_DARK = self::BORDER . ' ' . self::BORDER . '-dark';
  const BORDER_WHITE = self::BORDER . ' ' . self::BORDER . '-white';

  // border radius
  const BORDER_RADIUS = 'rounded';
  const BORDER_RADIUS_TOP = self::BORDER_RADIUS . '-top';
  const BORDER_RADIUS_RIGHT = self::BORDER_RADIUS . '-right';
  const BORDER_RADIUS_BOTTOM = self::BORDER_RADIUS . '-bottom';
  const BORDER_RADIUS_LEFT = self::BORDER_RADIUS . '-left';
  const BORDER_RADIUS_CIRCLE = self::BORDER_RADIUS . '-circle';
  const BORDER_RADIUS_0 = self::BORDER_RADIUS . '-0';
}
