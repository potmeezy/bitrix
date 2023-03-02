<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
				</div><!--end .bx-content -->

				<!-- region Sidebar -->
				<?if (!$needSidebar):?>
					<div class="sidebar col-md-3 col-sm-4">
						<?$APPLICATION->IncludeComponent(
	"dv:social",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "icons",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PROPERTY_CODE" => array("URL",""),
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N"
	)
);?>
					</div>
				<?endif?>
				<!--endregion -->

			</div><!--end row-->
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "sect",
					"AREA_FILE_SUFFIX" => "bottom",
					"AREA_FILE_RECURSIVE" => "N",
					"EDIT_MODE" => "html",
				),
				false,
				Array('HIDE_ICONS' => 'Y')
			);?>
		</div><!--end .container.bx-content-section-->
	</div><!--end .workarea-->

	<footer class="bx-footer">
		<div class="bx-footer-section bx-footer-bg">
			<div class="container">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/socnet_footer.php",
						"AREA_FILE_RECURSIVE" => "N",
						"EDIT_MODE" => "html",
					),
					false,
					Array('HIDE_ICONS' => 'Y')
				);?>
			</div>
		</div>
		<div class="bx-footer-section py-5 bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-3 order-lg-2 order-1 mb-4 mb-lg-0">
						<h4 class="bx-block-title text-light">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/about_title.php"
								),
								false
							);?>
						</h4>
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom_menu",
							array(
								"ROOT_MENU_TYPE" => "bottom",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_TYPE" => "A",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(),
							),
							false
						);?>
					</div>
					<div class="col-sm-6 col-lg-3 order-lg-3 order-2 mb-4 mb-lg-0">
						<h4 class="bx-block-title text-light">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/catalog_title.php"
								),
								false
							);?>
						</h4>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom_menu",
							array(
								"ROOT_MENU_TYPE" => "left",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(),
								"CACHE_SELECTED_ITEMS" => "N",
								"MAX_LEVEL" => "1",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
					</div>
					<div class="col-sm-6 col-lg-3 order-lg-4 order-3">
						<div style="padding: 20px;background:#eaeaeb">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/sender.php",
									"AREA_FILE_RECURSIVE" => "N",
									"EDIT_MODE" => "html",
								),
								false,
								array('HIDE_ICONS' => 'Y')
							);?>
						</div>
						<div id="bx-composite-banner" style="padding-top: 20px"></div>
					<div class = "hello"><?$APPLICATION->IncludeComponent(
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
);?>
</div>
					</div>
					<div class="col-sm-6 col-lg-3 order-lg-1 order-4">
						<div class="mb-3">
							<a class="bx-footer-logo" href="<?=SITE_DIR?>">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/company_logo_mobile.php"
									),
								false
								);?>
							</a>
						</div>
						<div class="mb-3 d-flex align-items-center">
							<i class="fa fa-phone pr-3 text-white" style="font-size: 25px;"></i>
							<span class="text-white">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"", array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/telephone.php"
									),
									false
								);?>
							</span>
						</div>
						<div class="mb-3 text-white">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/schedule.php"
								),
								false
							);?>
						</div>
						<div class="mb-3 text-white">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/personal.php"
								),
								false
							);?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bx-footer-section py-2 bg-secondary">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 bx-up">
							<a href="javascript:void(0)" data-role="eshopUpButton" class="text-white"><i class="fa fa-caret-up"></i> <?=GetMessage("FOOTER_UP_BUTTON")?></a>
						</div>
						<div class="col-sm-6 text-white text-right">
							<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/copyright.php"
							), false);?>
						</div>
						
					</div>
				</div>
			</div>
	</footer>
	<div class="col d-sm-none">
		<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "bootstrap_v4", array(
				"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
				"PATH_TO_PERSONAL" => SITE_DIR."personal/",
				"SHOW_PERSONAL_LINK" => "N",
				"SHOW_NUM_PRODUCTS" => "Y",
				"SHOW_TOTAL_PRICE" => "Y",
				"SHOW_PRODUCTS" => "N",
				"POSITION_FIXED" =>"Y",
				"POSITION_HORIZONTAL" => "center",
				"POSITION_VERTICAL" => "bottom",
				"SHOW_AUTHOR" => "Y",
				"PATH_TO_REGISTER" => SITE_DIR."login/",
				"PATH_TO_PROFILE" => SITE_DIR."personal/"
			),
			false,
			array()
		);?>
	</div>
</div> <!-- //bx-wrapper -->


<script>
	BX.ready(function(){
		var upButton = document.querySelector('[data-role="eshopUpButton"]');
		BX.bind(upButton, "click", function(){
			var windowScroll = BX.GetWindowScrollPos();
			(new BX.easing({
				duration : 500,
				start : { scroll : windowScroll.scrollTop },
				finish : { scroll : 0 },
				transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
				step : function(state){
					window.scrollTo(0, state.scroll);
				},
				complete: function() {
				}
			})).animate();
		})
	});
</script>
</body>
</html>