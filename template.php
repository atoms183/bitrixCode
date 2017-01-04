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
	 

	   <div class="video_top" >
										 
        <img src="<?=SITE_TEMPLATE_PATH?>/images/video/video_1.jpg" />
		<h3><a href="/">Дизайн ногтей с использованием гель-лака «Кошачий глаз», Витражного гель-лака и акриловой краски</a></h3>
		<p>Магнитные гель-лаки всегда весьма эффектно выглядят на ногтях. Давайте вместе рассмотрим все этапы создания маникюра 
		с использованием нескольких гель-лаков и акриловой краски. И результат - один из вариантов неповторимого дизайна ногтей.</p>
			<span class="news_date">16 октября 2016</span>
			</div><!--video_top-->	

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
					 <span class="news_date"><? echo $arItem["TIMESTAMP_X"]?></span>
					</div><!-- .video_bott_text-->
					
	<?endforeach;?>
	</div><!--video_bott-->	
		</div><!-- .kompani_block_content -->
		
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
						 	
	 </div><!-- .block_content_right -->


























