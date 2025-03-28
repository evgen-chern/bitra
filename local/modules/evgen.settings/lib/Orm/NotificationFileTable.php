<?php

namespace Evgen\Settings\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\ORM\Query\Join;
use Bitrix\Main\FileTable;
use Bitrix\Main\ORM\Fields\Relations\Reference;
class NotificationFileTable extends Entity\DataManager
{

    public static function getTableName(): string
    {
        return 'evgen_notification_file';
    }

    public static function getMap(): array
    {
        return array(
            (new Entity\IntegerField('NOTIFICATION_ID'))->configurePrimary(),
            (new Reference('NOTIFICATION', NotificationTable::class, Join::on('this.NOTIFICATION_ID', 'ref.ID')))
                ->configureJoinType('inner'),
            (new Entity\IntegerField('FILE_ID'))->configurePrimary(),
            (new Reference('FILE', FileTable::class, Join::on('this.FILE_ID', 'ref.ID')))
                ->configureJoinType('inner')
        );
    }

}