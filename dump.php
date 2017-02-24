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
<div id="accordion" class="accordion">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
<h3 id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?echo $arItem["NAME"]?></h3>
		<div>
		
		<?if($arItem["DISPLAY_PROPERTIES"]["DOC_FILE"]["FILE_VALUE"]["FILE_SIZE"] > 20){?>



  <div class="document">
<table cellspacing="0" style="background:#fff;">
<tbody>

<tr>
<td width="40px"><div class="docxIcon pdf"></div></td>

<td>


<div class="docLink" style="width: 430px;">
<a href="<?=$arItem["DISPLAY_PROPERTIES"]["DOC_FILE"]["FILE_VALUE"]["SRC"];?>" style="text-decoration: none;" download><div class="docxName" style="color: #75c1ff;"><?=$arItem["DISPLAY_PROPERTIES"]["DOC_FILE"]["FILE_VALUE"]["DESCRIPTION"]?></div></a> 
</div>

</td>
<td style="color: #75c1ff;"><? print round(filesize($_SERVER['DOCUMENT_ROOT'].$arDoc["SRC"])/1024/1024, 2)?> Мб.</td>

</tr>

</tbody>
</table>

</div>
		
<?}else{?>

<?foreach($arItem["DISPLAY_PROPERTIES"]["DOC_FILE"]["FILE_VALUE"] as $arDoc):?>



  <div class="document">
<table cellspacing="0" style="background:#fff;">
<tbody>

<tr>
<td width="40px"><div class="docxIcon pdf"></div></td>

<td>

<div class="docLink" style="width: 430px;">

<?
if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == ''){?>
<?
if ( CSite::InGroup( array(1,2,6,5,13,10,12,11,9,8) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo "У вас нет доступа к просмотру, обратитесь к администрации";
endif;
?>	
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 1 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(1) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 2 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(2) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 6 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(6) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 5 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(5) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 13 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(13) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 10 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(10) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 12 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(12) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 11 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(11) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 9 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(9) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["VISIBILITY"]["VALUE"] == 8 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(8) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

?>

<?
if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == ''){?>
<?
if ( CSite::InGroup( array(1,2,6,5,13,10,12,11,9,8) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo "<p>У вас нет доступа к скачиванию файла, обратитесь к администрации</p>";
endif;
?>	
<?}
if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 1 ){?>
<?
if ( CSite::InGroup( array(1) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if ($ar_res = $res->GetNext()){?>
<a href="<?=$arDoc["SRC"];?>" style="text-decoration: none;" download><div class="docxName" style="color: #75c1ff;"><?=$arDoc["DESCRIPTION"]?></div></a>
<?}
endif;
?>	
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 2 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(2) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 6 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(6) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 5 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(5) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 13 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(13) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 10 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(10) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 12 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(12) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 11 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(11) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 9 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(9) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

if ($arItem["PROPERTIES"]["DOWNLOAD"]["VALUE"] == 8 ){?>
<div class="docxName" style="color: #75c1ff;">
<?
if ( CSite::InGroup( array(8) ) ):
$res = CIBlock::GetByID($_GET["BID"]);
if($ar_res = $res->GetNext())
echo $arDoc["DESCRIPTION"];
endif;
?>	
</div>
<?}

?>

</div>

</td>
<td style="color: #75c1ff;"><? print round(filesize($_SERVER['DOCUMENT_ROOT'].$arDoc["SRC"])/1024/1024, 2)?> Мб.</td>
</tr>

</tbody>
</table>

</div>
<?endforeach;?>
          
    <?}?>
		


  </div>
 

	<?endforeach;?>

</div>
<pre>

<?/*print_r($arResult);*/?>
</pre>

