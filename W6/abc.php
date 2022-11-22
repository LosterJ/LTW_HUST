<?php

//$a = array(10,20,30);

$b=[];
$a=[10,1.324,'asdfja',false];

$a[100]=100;
$a[1000]=231;

echo "Array length: ".count($a)."\n";
var_dump($a);

$a=[
    10=>100,
    123,
    100=>"fajdskf",
    "kjlk"
];
foreach($a as $ai){
    echo $ai.' ';
}
foreach($a as $i=>$ai){
    echo $i.":".$ai.' ';
}

sort($a);var_dump($a);//sap xep theo gia tri va reset chi so
asort($a);foreach($a as $ai) echo $ai;//sap xep theo gia tri
ksort($a); var_dump($a);//sap xep theo key

function my_custom_compare($x,$y){
    $xc = $x%2 == 0;
    $yc = $y%2 ==0;

    if($xc && !$yc) return 1;
    if(!$xc && $yc) return -1;

    if($xc && $yc) return -($x <=> $y);
    return $x <=> $y;
}
usort($a,'my_custom_compare');



usort($a,function($x,$y){
    $xc = $x%2 == 0;
    $yc = $y%2 ==0;

    if($xc && !$yc) return 1;
    if(!$xc && $yc) return -1;

    if($xc && $yc) return -($x <=> $y);
    return $x <=> $y;
})

?>