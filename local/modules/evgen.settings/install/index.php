<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Main\Application;

use Evgen\Settings\Orm\NotificationTable;
use Evgen\Settings\Orm\NotificationFileTable;

Loc::loadMessages(__FILE__);

class evgen_settings extends CModule
{
	/**
	 * @return string
	 */
	public static function getModuleId()
	{
		return basename(dirname(__DIR__));
	}

	public function __construct()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__) . "/version.php");
		$this->MODULE_ID = self::getModuleId();
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = Loc::getMessage("MY_COMPANY_CUSTOM_MODULE_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("MY_COMPANY_CUSTOM_MODULE_DESC");

		$this->PARTNER_NAME = Loc::getMessage("MY_COMPANY_CUSTOM_PARTNER_NAME");
		$this->PARTNER_URI = Loc::getMessage("MY_COMPANY_CUSTOM_PARTNER_URI");
	}

	public function doInstall()
	{
		try
		{
			Main\ModuleManager::registerModule($this->MODULE_ID);
            $this->InstallDB();
		}
		catch (Exception $e)
		{
			global $APPLICATION;
			$APPLICATION->ThrowException($e->getMessage());

			return false;
		}

		return true;
	}

	public function doUninstall()
	{
		try
		{
            $this->UnInstallDB();
			Main\ModuleManager::unRegisterModule($this->MODULE_ID);
		}
		catch (Exception $e)
		{
			global $APPLICATION;
			$APPLICATION->ThrowException($e->getMessage());

			return false;
		}

		return true;
	}

    public function InstallDB(): bool
    {
        if (!Loader::includeModule($this->MODULE_ID))
        {
            return false;
        }

        $dbCon = Application::getConnection();

        $entity = NotificationTable::getEntity();
        $tableName = NotificationTable::getTableName();
        if(!$dbCon->isTableExists($tableName))
        {
            $entity->createDbTable();
        }

        $entity = NotificationFileTable::getEntity();
        $tableName = NotificationFileTable::getTableName();
        if (!$dbCon->isTableExists($tableName))
        {
            $entity->createDbTable();
        }

        return true;
    }

    public function UnInstallDB(): bool
    {
        if (!Loader::includeModule($this->MODULE_ID))
        {
            return false;
        }

        $dbCon = Application::getConnection();

        $tableName = NotificationTable::getTableName();
        $dbCon->queryExecute('DROP TABLE IF EXISTS ' . $tableName);

        $tableName = NotificationFileTable::getTableName();
        $dbCon->queryExecute('DROP TABLE IF EXISTS ' . $tableName);

        return true;
    }

}