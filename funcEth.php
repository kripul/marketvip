<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);

$limit = "150";
$btc = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/ticker"), true);
$dataTicker = file_get_contents("https://vip.bitcoin.co.id/api/eth_idr/ticker");
$dataTicker2 = json_decode($dataTicker, true);
$dataDepth = file_get_contents("https://vip.bitcoin.co.id/api/eth_idr/depth");
$dataDepth2 = json_decode($dataDepth, true);
$bittrex = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market=btc-eth"), true);
$poloniex = json_decode(file_get_contents("https://poloniex.com/public?command=returnTicker"), true);

$btcVIP = $btc['ticker']['last'];

$ethBittrex = floor($bittrex['result']['Last']*$btcVIP);
$ethBittrexBid = floor($bittrex['result']['Bid']*$btcVIP);
$ethBittrexAsk = floor($bittrex['result']['Ask']*$btcVIP);

$ethPoloniex = floor($poloniex['BTC_ETH']['last']*$btcVIP);
$ethPoloniexBid = floor($poloniex['BTC_ETH']['highestBid']*$btcVIP);
$ethPoloniexAsk = floor($poloniex['BTC_ETH']['lowestAsk']*$btcVIP);

$totaleth = $dataTicker2['ticker']['vol_eth'];

for ($i=0; $i < $limit; $i++){
	$buy = $dataDepth2['buy'][$i];
	$totalbuy += $buy[1];
	$totalbuyRP += $buy[0];
	$rerataBuy = floor($totalbuyRP/150);

	$sell = $dataDepth2['sell'][$i];
	$totalsell += $sell[1];
	$totalsellRP += $sell[0];
	$rerataSell = floor($totalsellRP/150);
}

$array = array('rerataSell' => $rerataSell, 'totalSell' => $totalsell, 'rerataBuy' => $rerataBuy, 'totalBuy' => $totalbuy, 'totalVIP' => $totaleth, 'ethBittrex' => $ethBittrex, 'ethBittrexBid' => $ethBittrexBid, 'ethBittrexAsk' => $ethBittrexAsk, 'ethPoloniex' => $ethPoloniex, 'ethPoloniexBid' => $ethPoloniexBid, 'ethPoloniexAsk' => $ethBittrexAsk);

$json = json_encode($array);
echo $json;
?>
