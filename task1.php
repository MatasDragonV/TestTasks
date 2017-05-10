<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule("iblock"))
{ 
//Самый простой способ отфильтровать инфоблок по внешнему полю - сделать запрос по значению связанного поля. Например так.
    $PRODUCTS_IBLOCK_ID = 20;
    $Producer = 'Samsung';
    $arFilter = array(
        "IBLOCK_ID" => $PRODUCTS_IBLOCK_ID,
        "ACTIVE" => "Y",
        array(
            "LOGIC" => "OR",
            array(">=TIMESTAMP_X" => ConvertTimeStamp(time()-(86400*7)),"<=TIMESTAMP_X" => ConvertTimeStamp(time())),
            array("PROPERTY_PRODUCER.NAME" => $Producer),
        ),
    );
    $arSelect = Array("*");//Выбираем все поля
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        print_r($arFields);
    }
}
?>
