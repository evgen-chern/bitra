<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var Notifications $component
 * @var array $arParams
 * @var array $arResult
 */

$APPLICATION->IncludeComponent(
	'evgen:notification.detail',
	'',
	[
		'LIST_URL' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['list'],
		'NOTIFICATION_ID' => $arResult['VARIABLES']['ID'],
		'CACHE_TIME' => $arParams['CACHE_TIME'],
		'CACHE_TYPE' => $arParams['CACHE_TYPE'],
	],
	$component
);
