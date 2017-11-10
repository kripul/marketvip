<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);

$limit = "150";
$btc = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/ticker"), true);
$dataTicker = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/ticker"), true);
$dataDepth = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/depth"), true);
//$bittrex = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market=btc-btc"), true);
//$poloniex = json_decode(file_get_contents("https://poloniex.com/public?command=returnTicker"), true);

$btcVIP = $btc['ticker']['last'];

//$btcBittrex = floor($bittrex['result']['Last']*$btcVIP);
//$btcBittrexBid = floor($bittrex['result']['Bid']*$btcVIP);
//$btcBittrexAsk = floor($bittrex['result']['Ask']*$btcVIP);

//$btcPoloniex = floor($poloniex['BTC_btc']['last']*$btcVIP);
//$btcPoloniexBid = floor($poloniex['BTC_btc']['highestBid']*$btcVIP);
//$btcPoloniexAsk = floor($poloniex['BTC_btc']['lowestAsk']*$btcVIP);

for ($i=0; $i < $limit; $i++){
	$buy = $dataDepth['buy'][$i];
	$totalbuy += $buy[1];
	$totalbuyRP += $buy[0];
	$rerataBuy = floor($totalbuyRP/150);

	$sell = $dataDepth['sell'][$i];
	$totalsell += $sell[1];
	$totalsellRP += $sell[0];
	$rerataSell = floor($totalsellRP/150);
}

$totalbtc = $dataTicker['ticker']['vol_btc'];

$array = array('totalSell' => $totalsell,'totalBuy' => $totalbuy, 'totalVIP' => $totalbtc, 'btcBittrex' => $btcBittrex, 'btcBittrexBid' => $btcBittrexBid, 'btcBittrexAsk' => $btcBittrexAsk, 'btcPoloniex' => $btcPoloniex, 'btcPoloniexBid' => $btcPoloniexBid, 'btcPoloniexAsk' => $btcBittrexAsk);

$json = json_encode($array);
echo $json;
?>
