<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
 $arComponentParameters = array(
"GROUPS" => array(),
"PARAMETERS" => array(
"FILE" => array(
"PARENT" => "BASE",
"NAME" => "Иконки",
"TYPE" => "FILE",
"FD_EXT" => "png,gif,jpg,jpeg",
"FD_UPLOAD" => true,
"FD_USE_MEDIALIB" => true,
"FD_MEDIALIB_TYPES" => Array(
	'image',
),
"MULTIPLE" => "Y",
"DEFAULT" => "",
),
"REF" => array(
"PARENT" => "BASE",
"NAME" => "Ссылка",
"TYPE" => "STRING",
"MULTIPLE" => "Y",
"ADDITIONAL_VALUES" => "Y",
"DEFAULT" => null,
),
"REF_PIC" => array(
"PARENT" => "BASE",
"NAME" => "Ссылка на картинку",
"TYPE" => "STRING",
"MULTIPLE" => "Y",
"ADDITIONAL_VALUES" => "Y",
"DEFAULT" => null,
),
),
);