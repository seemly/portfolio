<?php
namespace App\Application\Infrastructure\Enums;

use App\Application\Infrastructure\Interfaces\IBaseEnum;

abstract class AbstractEnum implements IBaseEnum
{
  /**
   * @return array
   */
  public static function getConstants()
  {
    $oClass = new \ReflectionClass(get_called_class());
    return $oClass->getConstants();
  }

  /**
   * @return array
   */
  public static function getValues()
  {
    return array_values(self::getConstants());
  }

  /**
   * @return array
   */
  public static function getKeyedValues()
  {
    $return = [];
    foreach(static::getValues() as $value)
    {
      $return[$value] = static::getDisplayValue($value);
    }
    return $return;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }

  /**
   * @param $value
   *
   * @return string
   */
  public static function getDisplayValue($value)
  {
    return ucwords($value);
  }
}
