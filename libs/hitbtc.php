<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);
$data = json_decode(file_get_contents("https://api.hitbtc.com/api/2/public/ticker/".$_GET['i']."BTC"), true);

$hitbtc = $data['last'];
$hitbtcbid = $data['bid'];
$hitbtcask = $data['ask'];

$array = array('hitbtc' => $hitbtc ,'hitbtcask' => $hitbtcask,'hitbtcbid' => $hitbtcbid );

$json = json_encode($array);
echo $json;
?>
