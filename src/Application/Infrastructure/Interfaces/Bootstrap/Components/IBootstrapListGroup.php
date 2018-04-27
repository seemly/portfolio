<?php
namespace App\Application\Infrastructure\Interfaces\Bootstrap\Components;

interface IBootstrapListGroup
{
  const LIST_GROUP = 'list-group';

  const LIST_GROUP_ITEM = 'list-group-item';
  const LIST_GROUP_ITEM_PRIMARY = self::LIST_GROUP_ITEM . '-primary';
  const LIST_GROUP_ITEM_SECONDARY = self::LIST_GROUP_ITEM . '-secondary';
  const LIST_GROUP_ITEM_SUCCESS = self::LIST_GROUP_ITEM . '-success';
  const LIST_GROUP_ITEM_DANGER = self::LIST_GROUP_ITEM . '-danger';
  const LIST_GROUP_ITEM_WARNING = self::LIST_GROUP_ITEM . '-warning';
  const LIST_GROUP_ITEM_INFO = self::LIST_GROUP_ITEM . '-info';
  const LIST_GROUP_ITEM_LIGHT = self::LIST_GROUP_ITEM . '-light';
  const LIST_GROUP_ITEM_DARK = self::LIST_GROUP_ITEM . '-dark';
  const LIST_GROUP_ITEM_ACTION = self::LIST_GROUP_ITEM . '-action';

  const LIST_GROUP_FLUSH = (self::LIST_GROUP . ' ' . self::LIST_GROUP . '-flush');
}
