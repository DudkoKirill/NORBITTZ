<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * */

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;


$arComponentParameters = [
    // группы в левой части окна
    "GROUPS" => [
        "BASE" => [
            "NAME" => 'Основные параметры',
            "SORT" => 550,
        ],
    ],
    // поля для ввода параметров в правой части
    "PARAMETERS" => [
        // Настройки кэширования
        'CACHE_TIME' => ['DEFAULT' => 3600],
        "CURRENCIES" => [
            "PARENT" => "SETTINGS",
            "NAME" => 'Коды валют (через запятую)',
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "USD",
            "COLS" => 25],
    ]
];