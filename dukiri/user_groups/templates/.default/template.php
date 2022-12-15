<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (count($arResult['GROUPS'])): ?>
    <div class="groups_table">
        <div class="group_row">
            <div class="group_id">
                ИД группы
            </div>
            <div class="group_name">
                Имя группы
            </div>
            <div class="group_desc">
                Описание группы
            </div>
        </div>
        <? foreach ($arResult['GROUPS'] as $GROUP): ?>
            <div class="group_row">
                <div class="group_id">
                    <?= $GROUP['ID'] ?>
                </div>
                <div class="group_name">
                    <?= $GROUP['NAME'] ?>
                </div>
                <div class="group_desc">
                    <?= $GROUP['DESCRIPTION'] ?>
                </div>
            </div>
        <?endforeach ?>
    </div>
<? else: ?>
    <div>Не найдено ни одной группы пользователей</div>
<?endif;
