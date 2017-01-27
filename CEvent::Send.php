<?function notifyNewItemFeedback($ID, $arFields){
    ob_start();
    $res = CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => %id_инфоблока_каталога%,
            'PROPERTY_FORUM_TOPIC_ID' => $arFields["TOPIC_ID"]
        ),
        false,
        false,
        array('*', 'IBLOCK_ID', 'ID', 'NAME', 'PROPERTY_FORUM_TOPIC_ID', 'SECTION_ID', 'SECTION', 'SECTIONS')
    );
 
    if($ar_res = $res->GetNext()){
        var_dump(date('d.m.Y H:i:s'));
        echo 'найден товар '.$ar_res['NAME'];
        $TYPE_MAIL_EVENT = 'NEW_ITEM_REVIEW';
        var_dump($ar_res);
        $arMail = array(
            'ITEM_NAME' => $ar_res['NAME'],
            'AUTHOR_NAME' => $arFields['AUTHOR_NAME'],
            'POST_DATE' => date('d.m.Y H:i:s'),
            'POST_MESSAGE' => $arFields['POST_MESSAGE'],
            'PATH2ITEM' => '/catalog/' . $ar_res['IBLOCK_SECTION_ID'] . '/' . $ar_res['ID'],
        );
        var_dump($arMail);
        $ID_MAIL_EVENT = %id_почтового_события%;
       // $ok = CEvent::Send($TYPE_MAIL_EVENT, "s1", $arMail, $ID_MAIL_EVENT);
        if ($ok){
            echo 'Сообщение отправлено';
        }
        else{
            'Сообщение не отправлено '.$ok;
        }
    }
    else
        echo 'Элемент не найден.';
    $dump = ob_get_clean();
 
    if (!empty($ok)){
        return true;
    }
    else{
        $filename = dirname(__FILE__).'/dump.txt';
 
        if (!file_exists($filename)){
            $f = fopen($filename, 'w+');
            fclose($f);
        }
        file_put_contents($filename, $dump);
    }
}
AddEventHandler("forum", "onAfterMessageAdd", "notifyNewItemFeedback");?>
