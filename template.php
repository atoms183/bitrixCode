<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>	
<div class="block_content_right" >	
	                             
	 <div class="video_content" >
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?$enum_fields = $arItem["PROPERTIES"]?>


   
	 

	<?if ($enum_fields["MAIN_VIDEO"]["VALUE"] == "Y") { ?>
			<div class="video_top">   <!-- video top -->
			<a href="#win<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="540" heigh="360" class="news_img_1170" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" /></a>
			<h3><a href="<?echo $arItem['ID']["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
			
			
			 <span class="news_date"> <!-- Вывод даты -->
			
			<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<?
$arParams["DATE_CREATE"]="j F Y";
echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arProperty["DISPLAY_VALUE"], CSite::GetDateFormat()));
?>
		<?endforeach;?>
		</span>

		
			 
			 
			</div>   <!-- video top -->

			
			<? } ?>   
<?endforeach;?>

<?//echo "<pre>"; print_r($arItem); echo "</pre>";?>

			<div class="video_bott" >

	<?foreach($arResult["ITEMS"] as $arItem):?>
 

			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="video_bott_text" style="padding-right: 30px;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">	

			<a href="#win<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/></a><!-- Вывод превью картинки -->
			<!-- Модальное окно -->

				<a href="#x" class="overlay" id="win<?=$this->GetEditAreaId($arItem['ID']);?>"></a>
					<div class="popup">
						<div class="video">
							<iframe width="853" height="480" src="<?echo $arItem["PROPERTIES"]["YOUTUBE"]["VALUE"];?>" frameborder="0" allowfullscreen></iframe> <!--Вывод видео с youtube-->
							</div>
								<a class="close" title="Закрыть" href="#x"></a>
							</div> 
				</a> 
		

					<h3><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></b></a><br /></h3><!--Вывод заголовка видео-->
					 	   <span class="news_date">
			
			<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<?
$arParams["DATE_CREATE"]="j F Y";
echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arProperty["DISPLAY_VALUE"], CSite::GetDateFormat()));
?>
		<?endforeach;?>
		</span> 
					</div><!-- .video_bott_text-->
					
	<?endforeach;?>
	</div><!--video_bott-->	
		</div><!-- .kompani_block_content -->
		
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
						 	
	 </div><!-- .block_content_right -->
	 
	 
	 
	 
