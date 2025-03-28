<?php

namespace Evgen\Settings\EventHandlers;

use Bitrix\Main\Entity;

class Notification
{
    public static function onBeforeAdd(Entity\Event $event): Entity\EventResult
    {
        $fields = $event->getParameter('fields');
        return new Entity\EventResult();
    }

    public static function onAfterDelete(Entity\Event $event): Entity\EventResult
    {
        $primary = $event->getParameter('primary');
        return new Entity\EventResult();
    }

}
