<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap;

interface IBootstrapShadow
{
  const SHADOW = 'shadow';
  const SHADOW_NONE = self::SHADOW . '-none';
  const SHADOW_SM = self::SHADOW . '-sm';
  const SHADOW_LG = self::SHADOW . '-lg';
}
