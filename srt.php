<main class="content wraper_100">
	
						 				
				         <div class="block_content compr_content wraper_100" >
				             
							 <div class="block_content_wrap wraper_1170" >
				             
							     <h2 class="block_content_head" >Сравнение товаров<span>показано 5 из 8 товаров</span></h2>
	                             
								 <div class="compr_block_top" >	
								     <a href="#" class="compr_add" >добавить товар</a>
								     <a href="#" class="compr_delete" ><i></i>очистить список</a>
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
																			
										<div class="compr_table_wrap compr_table_1" >
								          <table class="compr_table_tovar" >
									      <tbody>
										     <tr>
											     <td>
												     <div class="compr_table_img" >
													     <img src="<?=$arResult["ITEMS"]["0"]["FIELDS"]["PREVIEW_PICTURE"]["SRC"]?>" />
														 <div class="compr_table_close compr_table_close_1" ></div>
														 <span class="tovars_marker yellow" >sale</span>
													 </div>
												 </td>
											 </tr>
											 <tr>
												 <td><span>Название товара</span><p><?=$arResult["ITEMS"]["0"]["NAME"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Артикул</span><p><?=$arResult["ITEMS"]["0"]["CODE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Объем</span><p><?=$arResult["SHOW_PROPERTIES"]["CONTENT"]["VALUE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Производитель</span><p><?=$arResult["SHOW_PROPERTIES"]["PROIZVODITEL"]["VALUE"]?></p></td>
											 </tr>
											 <tr>
												 <td><span>Страна</span><p><?=$arResult["SHOW_PROPERTIES"]["STRANA"]["VALUE"]?></p></td>
											 </tr>
                                             <tr>
												 <td><span>Стоимость</span><p><strong><?=$arResult["ITEMS"]["0"]["CATALOG_PRICE_1"]?> <span><?=$arResult["PRICES"]["BASE"]["CURRENCY"]?> <span>рублей</span></strong></p></td>
											 </tr>
										  </tbody>
									      </table>				
										  <a href="#" class="compr_table_kypit" /><i class="fa fa-shopping-basket" aria-hidden="true"></i>купить</a>
									    </div>	<!-- .compr_table_wrap1 -->
										
								        
										
										
										
								
											
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
	
	
	<?dd($arResult);?>
