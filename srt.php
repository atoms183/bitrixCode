<?

$delUrlID = "";
foreach($arResult["ITEMS"] as $arElement):
	$delUrlID .= "&ID[]=".$arElement["ID"];
endforeach;
?>
<main class="content wraper_100">

				<?
					if($_REQUEST["action"]=="DELETE_FROM_COMPARE_LIST" && $id == 0) {unset($_SESSION[$arParams["NAME"]][$arParams["IBLOCK_ID"]]);} 
				?>
	
						 				
				         <div class="block_content compr_content wraper_100" >
				             
							 <div class="block_content_wrap wraper_1170" >
							 
							 
				             
							  
								 
								 <h2 class="block_content_head" >Сравнение товаров<span>показано  <?=count($arResult["ITEMS"])?> из <?=count($arResult["ITEMS"])?> товаров</span></h2>	

	                             
								 <div class="compr_block_top" >	
								     <a href="/catalog/" class="compr_add" >добавить товар</a>
									 				 						 			  
									  <?if(strlen($delUrlID) > 0):
		$delUrl = htmlspecialchars($APPLICATION->GetCurPageParam("action=DELETE_FROM_COMPARE_RESULT&IBLOCK_ID=".$arParams['IBLOCK_ID'].$delUrlID,array("action", "IBLOCK_ID", "ID")));?>
		<a class="compr_delete" href="<?=$delUrl?>"><i></i>очистить список</i><?=GetMessage("CATALOG_DELETE_ALL")?></a>
	<?endif;?>		
									  
									  
								 </div>
								 
	                             <div class="block_content_compr" >	
	                             
								     <div class="compr_table_left" >
								        <table class="compr_table_info" >
									      <tbody>
										     <tr>
                                                 <td>&nbsp;</td>
											 </tr>
											 <tr>
											     <td><span>Название товара</span></td>
											 </tr>
											 <tr>
											     <td><span>Артикул</span></td>
											 </tr>
											 <tr>
											     <td><span>Объем</span></td>
											 </tr>
											 <tr>
											     <td><span>Производитель</span></td>
											 </tr>
											 <tr>
											     <td><span>Страна</span></td>
											 </tr>
                                             <tr>
											     <td><span>Стоимость</span></td> 
											 </tr>
										  </tbody>
									    </table>
									 </div>

									 
									 
								     <div class="compr_table_right" >
								       
									   <div class="compr_table_right_scroll" >
									   
									<?foreach($arResult["ITEMS"] as $arItem):?>		

									
										<div class="compr_table_wrap compr_table_<?=$this->GetEditAreaId($arItem['ID']);?>" >
								          <table class="compr_table_tovar" >
									      <tbody>
										     <tr>
											     <td>
												     <div class="compr_table_img" >
													     <img src="<?=$arItem["FIELDS"]["PREVIEW_PICTURE"]["SRC"]?>" />
														 <div class="compr_table_close compr_table_close_1" onclick="location.href='?action=DELETE_FROM_COMPARE_RESULT&ID=<?echo $arItem["ID"]?>'"></div>
														 <div class="compr_table_close compr_table_close_1" onclick="location.href='?action=DELETE_FROM_COMPARE_RESULT&ID=<?echo $arItem["ID"]?>'"></div>
													
														 
														 <?if ($arItem['PROPERTIES']['HIT']['VALUE'] == 'Y' ):?>
										<span class="tovars_marker reds" >hit</span>
									<?elseif ($arItem['PROPERTIES']['SALE']['VALUE'] == 'Y'):?>
										<span class="tovars_marker yellow" >sale</span>
									<?elseif ($arItem['PROPERTIES']['NEW']['VALUE'] == 'Y'):?>	
										<span class="tovars_marker green" >new</span>
									<?endif;?>
													 </div>
												 </td>
											 </tr>
											 <tr>
												 <td><span>Название товара</span><p><?=$arItem["NAME"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Артикул</span><p><?=$arItem["PROPERTIES"]["ARTIKYL"]["VALUE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Объем</span><p><?=$arItem["PROPERTIES"]["CONTENT"]["VALUE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Производитель</span><p><?=$arItem["PROPERTIES"]["PROIZVODITEL"]["VALUE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Страна</span><p><?=$arItem["PROPERTIES"]["STRANA"]["VALUE"]?></p></td>
											 </tr>
                                             <tr>
												 <td><span>Стоимость</span><p><strong><?=$arItem["CATALOG_PRICE_1"]?> <span> <span>рублей</span></strong></p></td>
											 </tr>
										  </tbody>
									      </table>				
			<!--ссылка на оформление заказа-->							  
		 <a href="<?=$arItem["DETAIL_PAGE_URL"];?>?action=ADD2BASKET&ELEMENT_ID=<?=$arItem["ID"];?>&id=<?=$arItem["ID"];?>" class="compr_table_kypit" ><i class="fa fa-shopping-basket" aria-hidden="true"></i>купить</a>
										  
									    </div>	<!-- .compr_table_wrap1 -->
										<?endforeach;?>
											
									   </div>	<!-- .compr_table_right_scroll -->
									   
									 </div>	<!-- .compr_table_right -->
								 
						         </div><!-- .block_content_compr -->
				             
							 </div>
							 
	                         <div class="block_content_social block_content_social_compr" >	
					             <a href="/"><i class="fa fa-vk" aria-hidden="true"></i></a>	
					             <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>	
					             <a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>	
					             <a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>	
						     </div>
	
							 
				         </div><!-- .block_content -->
						 						 
	</main><!-- .content -->
<script type="text/javascript">
	jQuery(function()
	{
		jQuery('.compr_table_right').jScrollPane();
	});
</script>

	

	

