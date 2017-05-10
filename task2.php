<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule("sale"))
{ 
	$arFilter = Array(
		">=DATE_INSERT" => ConvertTimeStamp(time()-(86400*7)),
		"<=DATE_INSERT" => ConvertTimeStamp(time()),
		">DISCOUNT_VALUE" => 0,
		"USER_PHONE" => "7%"
   	);

	$db_sales = CSaleOrder::GetList(array("DATE_INSERT" => "ASC"), $arFilter);
	while ($ar_sales = $db_sales->Fetch())
	{
		print_r($db_sales->Fetch());
	}
}
?>
