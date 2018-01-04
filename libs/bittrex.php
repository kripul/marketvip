<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);
$data = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market=btc-".$_GET['i'].""), true);

$Bittrex = $data['result']['Last'];
$BittrexBid = $data['result']['Bid'];
$BittrexAsk = $data['result']['Ask'];

$array = array('Bittrex' => $Bittrex ,'BittrexAsk' => $BittrexAsk,'BittrexBid' => $BittrexBid );

$json = json_encode($array);
echo $json;
?>
