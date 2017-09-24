<?php
function h($str){
    $h = htmlspecialchars($str, ENT_QUOTES);
    if($h=="1"){
        $h="正解！！";
    }else{
        $h="不正解。。";
    }
    return $h;
}

function cell($income){
    if($income=="salary"){
        $cell1 = $money1;
    }else if($income=="gamble"){
        $cell2 = $money1;
    }else{
        $cell3 = $money1;
    }
    return $cell;
}

?>