<?php
header('Content-type: text/plain');
//https://downloads.codingcoursestv.eu/056%20-%20php/weather/weather.php
$fp=fsockopen("ssl://downloads.codingcoursestv.eu",443,$errorCode,$error_message,30);
//var_dump($fp);
//var_dump($errorCode);
//var_dump($error_message);
if (!$fp){
    echo "$error_message ($errorCode)\n";
}
else{
    $out="GET /056%20-%20php/weather/weather.php?".http_build_query(['city'=>'Tehran'])." HTTP/1.1\r\n";
    $out.="Host: downloads.codingcoursestv.eu\r\n";
    $out.="Connection: Close\r\n\r\n";
    fwrite($fp,$out);
    $response=[];
    while (!feof($fp)){
        $response[]=fgets($fp,128);
    }
    fclose($fp);
//    var_dump($response);
    $responseStr=implode($response);
//    var_dump($responseStr);
    $splittedResponse=explode("\r\n\r\n",$responseStr);
    var_dump(json_decode( $splittedResponse[1],true));
}