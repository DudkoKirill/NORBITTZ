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

    private function getCurrencies(){
        if($this->arParams['CURRENCIES']!=''){
            $paramCurs=explode(',',$this->arParams['CURRENCIES']);
            $currencies=simplexml_load_file( 'https://www.cbr.ru/scripts/XML_daily.asp?date_req='.date('d/m/Y'));
            $resCurs=[];

            foreach ($currencies->Valute as $currency){

                if(in_array(strval($currency->CharCode),$paramCurs)){
                    $resCurs[]=array('NAME'=>strval($currency->Name),'VALUE'=>strval($currency->Value).' / '.strval($currency->Nominal).' Руб','CODE'=>strval($currency->CharCode));
                }
            }
            $this->arResult['CURRENCIES'] = $resCurs;
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
            $this->getCurrencies();
            // Подключить шаблон вывода
            $this->IncludeComponentTemplate();
        }
    }
}