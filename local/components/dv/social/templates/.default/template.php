<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);

{
?>
<div class="bx-socialsidebar">
	<div class="bx-block-title"><?=GetMessage("SS_TITLE")?></div>
	<div class="bx-socialsidebar-group">
		<ul>
			<?foreach($arResult["REF"] as $key=>$ref):?>
			<li>
				<a target="_blank"
					
					href="<?=($ref)?>"
					
				><img src="<?=$arResult["REF_PIC"][$key]?>" width="50" 
					height="50" alt="" ></a>
			</li>
			<?endforeach?>
		</ul>
	</div>
</div>

<?
}
?>