<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/*
 * Здесь размещается код, выполняемый каждый раз при подключении этого модуля
 */

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/constants.php";

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('iblock', 'OnAfterIblockElementAdd', [
    'Evgen\Settings\EventHandlers\Iblock',
    'onNewsAdd'
]);

//Highload event
$eventManager->addEventHandler('', 'SearchHistoryOnBeforeAdd', [
    'Evgen\Settings\EventHandlers\SearchHistory',
    'saveQuerySearchHistory'
]);

//ORM event
$ormEventManager = \Bitrix\Main\ORM\EventManager::getInstance();
$ormEventManager->addEventHandler(
    Evgen\Settings\Orm\NotificationTable::class,
    Bitrix\Main\ORM\Data\DataManager::EVENT_ON_AFTER_DELETE,
    [
        Evgen\Settings\EventHandlers\Notification::class,
        'onAfterDelete'
    ]);

$ormEventManager->addEventHandler(
    Evgen\Settings\Orm\NotificationTable::class,
    Bitrix\Main\ORM\Data\DataManager::EVENT_ON_AFTER_UPDATE,
    [
        Evgen\Settings\EventHandlers\Notification::class,
        'clearNotifyCache'
    ]);

