<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/hello_word"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/test_project"
	)
);?><?$APPLICATION->IncludeComponent(
	"dv:social", 
	".default", 
	array(
		"FILE" => "/upload/medialibrary/7ba/ox4m022qke3dzenpubhcaudphy6h56sm.png",
		"REF" => array(
			0 => "https://telegram.org",
			1 => "https://vk.com",
			2 => "https://en.wikipedia.org/wiki/Instagram",
			3 => "https://en.wikipedia.org/wiki/Facebook",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"REF_PIC" => array(
			0 => "/upload/medialibrary/76d/13sqyo94nldxpw1bwqxeytu8z78zxxhx.png",
			1 => "/upload/medialibrary/c3c/kdqls7104c4b9v5bnemn3ay5xshswdq0.png",
			2 => "/upload/medialibrary/c94/7y7p085pmpjifyh52gvw9m0l5cay66mr.png",
			3 => "/upload/medialibrary/7ba/ox4m022qke3dzenpubhcaudphy6h56sm.png",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>