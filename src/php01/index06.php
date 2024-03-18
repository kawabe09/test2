<?php
function text($score1,$score2,$score3)
{
    $wa=$score1+$score2+$score3;
    return $wa;
}
$total=text(20,50,100);

if($total<210){
    echo "合計点は".$total."なので不合格です";
}
else{
    echo "合計点は".$total."なので合格です";
}
