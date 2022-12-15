<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (count($arResult['CURRENCIES'])): ?>
    <div class="currencies_table">
        <div class="currency_row">
            <div class="currency_code">
                Код
            </div>
            <div class="currency_name">
                Имя
            </div>
            <div class="currency_value">
                Курс
            </div>
        </div>
        <? foreach ($arResult['CURRENCIES'] as $CURRENCY): ?>
            <div class="currency_row">
                <div class="currency_code">
                    <?= $CURRENCY['CODE'] ?>
                </div>
                <div class="currency_name">
                    <?= $CURRENCY['NAME'] ?>
                </div>
                <div class="currency_value">
                    <?= $CURRENCY['VALUE'] ?>
                </div>
            </div>
        <?endforeach ?>
    </div>
<? else: ?>
    <div>Не найдено ни одной валюты</div>
<?endif;
