<?php

namespace Evgen\Settings\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\ORM\Fields\Validators\LengthValidator;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\UserTable;
use Bitrix\Main\ORM\Query\Join;
use Bitrix\Main\ORM\Fields\Relations\ManyToMany;
use Bitrix\Main\FileTable;

class NotificationTable extends Entity\DataManager
{

    public static function getTableName(): string
    {
        return 'evgen_notification';
    }

    public static function getMap(): array
    {
        return array(
            (new Entity\IntegerField('ID'))->configurePrimary()->configureAutocomplete(),
            (new Entity\DatetimeField('DATE_CREATE'))->configureRequired()->configureDefaultValue(new DateTime()),
            (new Entity\DatetimeField('DATE_MODIFY'))->configureRequired()->configureDefaultValue(new DateTime()),
            (new Entity\StringField('TITLE'))->configureRequired()->addValidator(new LengthValidator(0,250)),
            (new Entity\TextField('MESSAGE'))->configureRequired(),
            (new Entity\IntegerField('USER_ID'))->configureRequired(),
            (new Reference('USER',UserTable::class, Join::on('this.USER_ID', 'ref.ID')))
                ->configureJoinType('inner'),
            (new ManyToMany('FILES', FileTable::class))->configureTableName('evgen_notification_file'),
            (new Entity\BooleanField('IS_READ'))->configureStorageValues('N', 'Y'),
            new Entity\BooleanField('IS_IMPORTANT'),
        );
    }

}