<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => 'Список валют',
    "DESCRIPTION" => 'Компонент для вывода таблицы валют',
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => Loc::getMessage("dukiriUsersGroups"),
        "NAME" => Loc::getMessage("Тестовые компоненты"),
    ],
];
?><?php
