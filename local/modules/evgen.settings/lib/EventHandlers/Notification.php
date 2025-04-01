<?php

namespace Evgen\Settings\EventHandlers;

use Bitrix\Main\Entity;
use Bitrix\Main\Application;
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

    public static function clearNotifyCache(Entity\Event $event)
    {
        $result = new Entity\EventResult();

        $id = $event->getParameter('id');
        if (is_array($id)) {
            $id = $id['ID'];
        }

        if (!$id) {
            return $result;
        }

        if (defined('BX_COMP_MANAGED_CACHE')) {
            $taggedCache = Application::getInstance()->getTaggedCache();
            $taggedCache->clearByTag('notify_id' . $id);
        }


        return $result;
    }

}
