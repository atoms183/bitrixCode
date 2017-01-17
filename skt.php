    <div class="block_1 wraper_100" >
				           
						   <div class="block_1_wrap wraper_1400" >
						 
	                         <div class="block_1_content" >	
							 <?foreach($arResult["ITEMS"] as $arItem):?>
	<?$enum_fields = $arItem["PROPERTIES"]?>
	<?if ($enum_fields["RABOTA_MESYACA"]["VALUE"] == "Yes") { ?>
			<div class="block_1_content_top" >
			 <h2><span>работы</span> клиентов</h2>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="570" heigh="483" class="rabota_1" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" /></a>
			<h3><span></span>Работа месяца</h3>
			<?foreach($arResult["ITEMS"] as $arItem):?>
	<?$enum_fields = $arItem["PROPERTIES"]?>
	<?if ($enum_fields["RABOTA_MESYACA2"]["VALUE"] == "Yes2") { ?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="390" heigh="308" class="rabota_2" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/></a>
			<? } ?>
			<?endforeach;?>
			
			
			<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?endforeach;?>
				</div>
			<? } ?>   
<?endforeach;?>



<!------------------------>


<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
		
		
		<div class="block_1_content_bot" >
		<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="360" height="368" class="rabota_3" />
			<span class="rabota_4_span">
			<img src="<?=$arResult["ITEMS"]["1"]["PREVIEW_PICTURE"]["SRC"]?>" width="295" height="295"  class="rabota_4" />
				<a href="/fotki/" >смотреть все работы</a>
				</span>
				
				</p>
									
									 <!-- Тот что сверху выводит 2 новости -->
									 
									 
									 <!-- Тут выводит последнюю новость -->
									 
									 <div class="block_1_konkyrs" >
									 
									 <?
// Выбираем какие данные будем загружать http://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getlist.php
            $arSelect = Array("ID", 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL');			
// Фильтруем данные, с какого ИБ, только активные, с только с опредленным ID
              $arFilter = Array("IBLOCK_ID" => 4, "ACTIVE"=>"Y");
// Сама функция  GetList которой задаем параметры, сортировки, по умолчанию ASC задаем наш arFilter и дополнительный массив nPage сколько элементов на стр., ну и выборку что выше задали.		  
              $res = CIBlockElement::GetList(Array("DESC" => "ASC"), $arFilter, false, Array("nPageSize"=>1), $arSelect); 	?>
					<?			  
                    while($ob = $res->GetNextElement()){
                      $arFields = $ob->GetFields();
                      $arProps = $ob->GetProperties();
					?>                
									     <span class="block_1_konkyrs_tire" ></span>
										 <span class="block_1_konkyrs_head" >конкурсы</span>
									     <a href="<?=$arFields["DETAIL_PAGE_URL"]?>"><?=$arFields["NAME"]?></a>
										 <p><?=$arFields["PREVIEW_TEXT"]?></p>
										 <p><span>Подробности акции читайте внутри</span></p>
									     <a href="<?=$arFields["DETAIL_PAGE_URL"]?>" class="block_1_konkyrs_podrob" >подробнее</a>										
							         </div>
					<?}?>
									 <!-- Тот что сверху выводит последнюю новость -->
									 
									 <?//dd($arItem);?>
							     </div>
								 
								 
							 </div>
				           </div>					 
				         </div><!-- .block_1 -->
						
						
