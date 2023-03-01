<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);

{
?>
<div class="bx-socialsidebar">
	<div class="bx-block-title">Социальные иконки</div>
	<div class="bx-socialsidebar-group">
		<ul class="socialsidebar-items">
			<?foreach($arResult["REF"] as $key=>$ref):?>
			<li class="socialsidebar-items_key">
				<a target="_blank"
					
					href="<?=($ref)?>"
					
				><img src="<?=$arResult["REF_PIC"][$key]?>" width="100%" 
					height="100%" alt="" ></a>
			</li>
			<?endforeach?>
		</ul>
	</div>
</div>

<?
}
?>