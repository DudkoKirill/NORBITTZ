<?php
use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class ExampleCompSimple extends CBitrixComponent {
    private $_request;

    /**
     * Обертка над глобальной переменной
     * @return CAllMain|CMain
     */
    private function _app() {
        global $APPLICATION;
        return $APPLICATION;
    }

    /**
     * Обертка над глобальной переменной
     * @return CAllUser|CUser
     */
    private function _user() {
        global $USER;
        return $USER;
    }

    private function getGroups(){
        $result = \Bitrix\Main\GroupTable::getList(array(

            'select'  => array('NAME','ID','DESCRIPTION')


        ));

        $grops=[];
        while ($arGroup = $result->fetch()) {
            $grops[]=$arGroup;
        }
        $this->arResult['GROUPS'] = $grops;

    }

    function setTitle(){
        if($this->arParams['TITLE']!=''){
            global $APPLICATION;
            $APPLICATION->SetTitle($this->arParams['TITLE']);
        }
    }
    /**
     * Подготовка параметров компонента
     * @param $arParams
     * @return mixed
     */
    public function onPrepareComponentParams($arParams) {
        return $arParams;
    }

    /**
     * Точка входа в компонент
     * Должна содержать только последовательность вызовов вспомогательых ф-ий и минимум логики
     * всю логику стараемся разносить по классам и методам
     */
    public function executeComponent() {
        if ($this->StartResultCache())
        {
            $this->getGroups();
            // Подключить шаблон вывода
            $this->IncludeComponentTemplate();
        }
        $this->setTitle();
    }
}