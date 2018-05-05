<?php
namespace App\Application\Infrastructure\Traits\Ui;

use Packaged\Helpers\Arrays;
use Packaged\Helpers\ValueAs;

trait UiAttributeTrait
{
  protected $_attributes = [];

  /**
   * @param string $key
   * @param        $value
   *
   * @return $this
   */
  public function setAttribute($key, $value)
  {
    if(is_string($key))
    {
      $this->_attributes[$key] = $value;
    }
    return $this;
  }

  /**
   * @param string $key
   *
   * @return bool
   */
  public function hasAttribute($key)
  {
    return array_key_exists($key, $this->_attributes);
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function removeAttribute($key)
  {
    unset($this->_attributes[$key]);
    return $this;
  }

  /**
   * Array of attributes, defined as:
   *
   * ['key' => 'value', 'id' => 'someId', 'class' => ['some', 'class', 'names']]
   *
   * @param array $attributes
   *
   * @return $this
   */
  public function setAttributes(array $attributes)
  {
    $this->_attributes = $attributes;
    return $this;
  }

  /**
   * @return array
   */
  public function getAttributes()
  {
    return $this->_attributes;
  }

  /**
   * @param string $key
   * @param bool   $throwException
   *
   * @return null
   * @throws \Exception
   */
  public function getAttribute($key, $throwException = false)
  {
    if($this->hasAttribute($key))
    {
      return $this->_attributes[$key];
    }

    if($throwException)
    {
      throw new \Exception("Attribute with the key {$key} does not exist");
    }

    return null;
  }

  /**
   * @param string $id
   *
   * @return $this
   */
  public function setId($id)
  {
    $this->setAttribute('id', $id);
    return $this;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return $this->getAttribute('id');
  }

  /**
   * @param $class
   *
   * @return $this
   */
  protected function _addClass($class)
  {
    if(!isset($this->_attributes['class']))
    {
      $this->_attributes['class'] = [];
    }
    $this->_attributes['class'][$class] = $class;
    return $this;
  }

  /**
   * @param string|array $class
   *
   * @return $this
   */
  public function addClass($class)
  {
    if(func_num_args() === 1)
    {
      $classes = ValueAs::arr($class);
    }
    else
    {
      $classes = func_get_args();
    }

    foreach($classes as $class)
    {
      if(is_array($class))
      {
        foreach($class as $c)
        {
          $this->_addClass($c);
        }
      }
      else
      {
        $this->_addClass($class);
      }
    }
    return $this;
  }

  /**
   * @param string $class
   *
   * @return bool
   */
  public function hasClass($class)
  {
    return isset($this->_attributes['class'][$class]);
  }

  /**
   * @param $class
   *
   * @return $this
   */
  protected function _removeClass($class)
  {
    unset($this->_attributes['class'][$class]);
    return $this;
  }

  /**
   * @param string|array $class
   *
   * @return $this
   */
  public function removeClass($class)
  {
    if(func_num_args() === 1)
    {
      $classes = ValueAs::arr($class);
    }
    else
    {
      $classes = func_get_args();
    }

    foreach($classes as $class)
    {
      if(is_array($class))
      {
        foreach($class as $c)
        {
          $this->_removeClass($c);
        }
      }
      else
      {
        $this->_removeClass($class);
      }
    }
    return $this;
  }

  /**
   * @return array
   */
  public function getClasses()
  {
    return (array)Arrays::value($this->_attributes, 'class', []);
  }
}
