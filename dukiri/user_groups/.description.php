<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => 'Список групп пользователей',
    "DESCRIPTION" => 'Компонент для вывода таблицы со списком групп пользователей',
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => Loc::getMessage("dukiriUsersGroups"),
        "NAME" => Loc::getMessage("Тестовые компоненты"),
    ],
];
?><?php
