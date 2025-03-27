<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

global $APPLICATION;
$APPLICATION->SetPageProperty('promise', $arResult["ITEMS"][2]["PREVIEW_TEXT"]);

