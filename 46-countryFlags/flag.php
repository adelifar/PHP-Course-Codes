<?php
header('Content-type: text/plain');
var_dump(ord('A'));
var_dump(ord('z'));
var_dump(chr(121));
var_dump(chr(68));
var_dump(mb_chr(127466));
$number=127462;

var_dump(mb_chr(127462));

//for ($i = $number; $i <$number+26 ; $i++) {
//    var_dump(mb_chr($i));
//    echo $i;
//    echo "\n";
//}
echo mb_chr(127470).mb_chr(127479);
echo mb_chr(127482) . mb_chr(127480);

function getFlagForCountry(string $st):string
{
    $number=127397;
    if (strlen($st)!==2)
        return $st;
    $st=strtoupper($st);
    $ch1=ord($st[0])+$number;
    $ch2=ord( $st[1])+$number;
    return mb_chr($ch1).mb_chr($ch2);
}
var_dump(getFlagForCountry('IR'));
var_dump(getFlagForCountry('us'));
var_dump(getFlagForCountry('jp'));
var_dump(getFlagForCountry('gb'));
var_dump(getFlagForCountry('kr'));
//iso2
