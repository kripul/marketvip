<?php
$header = "Content-Type: application/json; charset=utf-8";
header($header);

$limit = "150";
$btc = json_decode(file_get_contents("https://vip.bitcoin.co.id/api/btc_idr/ticker"), true);
$dataTicker = file_get_contents("https://vip.bitcoin.co.id/api/bch_idr/ticker");
$dataTicker2 = json_decode($dataTicker, true);
$dataDepth = file_get_contents("https://vip.bitcoin.co.id/api/bch_idr/depth");
$dataDepth2 = json_decode($dataDepth, true);
$bittrex = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getticker?market=btc-bcc"), true);
$poloniex = json_decode(file_get_contents("https://poloniex.com/public?command=returnTicker"), true);

$btcVIP = $btc['ticker']['last'];

$bchBittrex = floor($bittrex['result']['Last']*$btcVIP);
$bchBittrexBid = floor($bittrex['result']['Bid']*$btcVIP);
$bchBittrexAsk = floor($bittrex['result']['Ask']*$btcVIP);

$bchPoloniex = floor($poloniex['BTC_BCH']['last']*$btcVIP);
$bchPoloniexBid = floor($poloniex['BTC_BCH']['highestBid']*$btcVIP);
$bchPoloniexAsk = floor($poloniex['BTC_BCH']['lowestAsk']*$btcVIP);

$totalBCH = $dataTicker2['ticker']['vol_bch'];
$totalBCHrp = floor($dataTicker2['ticker']['vol_bch']*$dataTicker2['ticker']['last']);

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

$array = array('totalSell' => floor($totalsell),'totalBuy' => floor($totalbuy), 'totalVIP' => floor($totalBCH), 'totalVIPrp' => $totalBCHrp, 'bchBittrex' => $bchBittrex, 'bchBittrexBid' => $bchBittrexBid, 'bchBittrexAsk' => $bchBittrexAsk, 'bchPoloniex' => $bchPoloniex, 'bchPoloniexBid' => $bchPoloniexBid, 'bchPoloniexAsk' => $bchBittrexAsk);

$json = json_encode($array);
echo $json;
?>
