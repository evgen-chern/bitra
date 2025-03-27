<?php

namespace Evgen\Settings\EventHandlers;

use Bitrix\Main\Type\DateTime;
use Bitrix\Main\Entity\EventResult;
use Bitrix\Main\Entity\Event;

class SearchHistory
{
    public static function saveQuerySearchHistory(Event $event) : EventResult
    {
        global $USER;
        $fields = $event->getParameters('fields');
        $changedFields = [];
        $userID = $USER->getId();

        if (!isset($fields['UF_USER_ID']) && $userID > 0) {
            $changedFields['UF_USER_ID'] = $userID;
        }

        if (!isset($fields['UF_DATETIME'])) {
            $changedFields['UF_DATETIME'] = new DateTime();
        }

        $result = new EventResult();

        if (!empty($changedFields)) {
            $result->modifyFields($changedFields);
        }

        return $result;
    }
}