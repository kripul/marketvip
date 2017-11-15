<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);

$limit = "150";
$btc = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/ticker"), true);
$dataTicker = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/eth_idr/ticker"), true);
$dataDepth = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/eth_idr/depth"), true);
$bittrex = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market=btc-eth"), true);
$poloniex = json_decode(file_get_contents("https://poloniex.com/public?command=returnTicker"), true);

$btcVIP = $btc['ticker']['last'];

$ethBittrex = floor($bittrex['result']['Last']*$btcVIP);
$ethBittrexBid = floor($bittrex['result']['Bid']*$btcVIP);
$ethBittrexAsk = floor($bittrex['result']['Ask']*$btcVIP);

$ethPoloniex = floor($poloniex['BTC_ETH']['last']*$btcVIP);
$ethPoloniexBid = floor($poloniex['BTC_ETH']['highestBid']*$btcVIP);
$ethPoloniexAsk = floor($poloniex['BTC_ETH']['lowestAsk']*$btcVIP);

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

$totaleth = $dataTicker['ticker']['vol_eth'];
$totalETHrp = floor($dataTicker2['ticker']['vol_eth']*$btcVIP);
$array = array('totalSell' => $totalsell,'totalBuy' => $totalbuy, 'totalVIP' => $totaleth, 'totalVIPrp' => $totalETHrp, 'ethBittrex' => $ethBittrex, 'ethBittrexBid' => $ethBittrexBid, 'ethBittrexAsk' => $ethBittrexAsk, 'ethPoloniex' => $ethPoloniex, 'ethPoloniexBid' => $ethPoloniexBid, 'ethPoloniexAsk' => $ethBittrexAsk);

$json = json_encode($array);
echo $json;
?>
