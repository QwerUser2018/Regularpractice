<?php
$url="<p>rrrr 777</p><p>1111</p><p>tttt</p><p>jjj</p><p>ff</p><p>55</p><p>????</p><div> tytyty vd666gbf<div>????</div></div>";

//
function URL($url){
    preg_match_all('/((?<=<p>).*?(?=<\/p>))+/',$url,$arr);
    print_r($arr[0]) ;
}
//URL($url);

function searchdiv($url){
    $close=strpos($url,"</div>");
    $onediv=substr($url,0,$close);
    $open=strrpos($onediv,"<div>");
    $div=substr($onediv,$open);




}
searchdiv($url);





