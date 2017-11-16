<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
<!--   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->

  <!-- Site Properties -->
  <title>Koin</title>
  <link rel="stylesheet" type="text/css" href="dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">
  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="dist/semantic.js"></script>

  <style type="text/css">
  body {
    padding: 1em;
    background-color: #FFFFFF;
    /*font-family: Helvetica Neue;*/
    #font-size: 110%;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }

  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item">Koin</a>
    </div>
  </div>

  <div class="ui main container">
    <div class="ui secondary  menu">
      <a href="/" class="item" id="priceLastmenubtc">BTC</a>
      <a href="bch.php" class="item" id="priceLastmenubch">BCH</a>
      <a href="eth.php" class="item" id="priceLastmenueth">ETH</a>
      <a href="etc.php" class="item" id="priceLastmenuetc">ETC</a>
      <a href="ltc.php" class="item" id="priceLastmenultc">LTC</a>
      <a href="waves.php" class="item" id="priceLastmenuwaves">WAVES</a>
      <a href="xlm.php" class="item" id="priceLastmenuxlm">XLM</a>
      <a href="xrp.php" class="item active" id="priceLastmenuxrp">XRP</a>
      <a href="xzc.php" class="item" id="priceLastmenubxzc">XZC</a>
    </div>


<center>
  <h3>Volume XRP</h3>
<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="20%">Total Sell</th>
    <th width="20%">Total Buy</th>
    <th width="20%">Selisih Sell - Buy</th>
    <th width="20%">Total Koin di VIP</th>
    <th width="20%">Total dalam Rupiah</th>
  </tr>
  </thead>
  <tr>
    <td id="totalSell">0</td>
    <td id="totalBuy">0</td>
    <td id="selisih">0</td>
    <td id="totalVIP">0</td>
    <td id="totalVIPrp">0</td>
  </tr>

</table>
<br>

<h3>Price XRP</h3>
<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="16%">Market</th>
    <th width="16%">Harga Terkini</th>
    <th width="16%">Sell terkini</th>
    <th width="16%">Buy Terkini</th>
    <th width="16%">Sell Tertinggi Today</th>
    <th width="16%">Buy Terendah Today</th>
  </tr>
</thead>
  <tr>
    <td>VIP</td>
    <td id="priceLast">0</td>
    <td id="priceLashSell">0</td>
    <td id="priceLashBuy">0</td>
    <td id="priceTodayHigh">0</td>
    <td id="priceTodayLow">0</td>
  </tr>
    <tr>
    <td>Bitrex</td>
    <td id="BittrexLast">0</td>
    <td id="BittrexAsk">0</td>
    <td id="BittrexBid">0</td>
    <td id="">0</td>
    <td id="">0</td>
  </tr>
   <tr>
    <td>Poloniex</td>
    <td id="PoloniexLast">0</td>
    <td id="PoloniexAsk">0</td>
    <td id="PoloniexBid">0</td>
    <td id="">0</td>
    <td id="">0</td>
  </tr>
</table>
<br>
<h3>Market</h3>
<div class="ui grid">
  <div class="eight wide column">
    <h5>Market Jual</h5>
    <table class="ui celled striped table">
      <thead>
        <tr>
          <th>Harga</th>
          <th>Volume</th>
          <th>Total IDR</th>
        </tr>
      </thead>
        <tr>
          <td id="smh0">0</td>
          <td id="smv0">0</td>
          <td id="smt0">0</td>
        </tr>
        <tr>
          <td id="smh1">0</td>
          <td id="smv1">0</td>
          <td id="smt1">0</td>
        </tr>
        <tr>
          <td id="smh2">0</td>
          <td id="smv2">0</td>
          <td id="smt2">0</td>
        </tr>
        <tr>
          <td id="smh3">0</td>
          <td id="smv3">0</td>
          <td id="smt3">0</td>
        </tr>
        <tr>
          <td id="smh4">0</td>
          <td id="smv4">0</td>
          <td id="smt4">0</td>
        </tr>
        <tr>
          <td id="smh5">0</td>
          <td id="smv5">0</td>
          <td id="smt5">0</td>
        </tr>
        <tr>
          <td id="smh6">0</td>
          <td id="smv6">0</td>
          <td id="smt6">0</td>
        </tr>
        <tr>
          <td id="smh7">0</td>
          <td id="smv7">0</td>
          <td id="smt7">0</td>
        </tr>
        <tr>
          <td id="smh8">0</td>
          <td id="smv8">0</td>
          <td id="smt8">0</td>
        </tr>
        <tr>
          <td id="smh9">0</td>
          <td id="smv9">0</td>
          <td id="smt9">0</td>
        </tr>
        <tr>
          <td id="smh10">0</td>
          <td id="smv10">0</td>
          <td id="smt10">0</td>
        </tr>
        <tr>
          <td id="smh11">0</td>
          <td id="smv11">0</td>
          <td id="smt11">0</td>
        </tr>
        <tr>
          <td id="smh12">0</td>
          <td id="smv12">0</td>
          <td id="smt12">0</td>
        </tr>
        <tr>
          <td id="smh13">0</td>
          <td id="smv13">0</td>
          <td id="smt13">0</td>
        </tr>
        <tr>
          <td id="smh14">0</td>
          <td id="smv14">0</td>
          <td id="smt14">0</td>
        </tr>
        <tr>
          <td id="smh15">0</td>
          <td id="smv15">0</td>
          <td id="smt15">0</td>
        </tr>
        <tr>
          <td id="smh16">0</td>
          <td id="smv16">0</td>
          <td id="smt16">0</td>
        </tr>
        <tr>
          <td id="smh17">0</td>
          <td id="smv17">0</td>
          <td id="smt17">0</td>
        </tr>
        <tr>
          <td id="smh18">0</td>
          <td id="smv18">0</td>
          <td id="smt18">0</td>
        </tr>
        <tr>
          <td id="smh19">0</td>
          <td id="smv19">0</td>
          <td id="smt19">0</td>
        </tr>
        <tr>
          <td id="smh20">0</td>
          <td id="smv20">0</td>
          <td id="smt20">0</td>
        </tr>
    </table>
  </div>
  <div class="eight wide column">
    <h5>Market Beli</h5>
    <table class="ui celled striped table">
      <thead>
        <tr>
          <th>Harga</th>
          <th>Volume</th>
          <th>Total IDR</th>
        </tr>
      </thead>
        <tr>
          <td id="bmh0">0</td>
          <td id="bmv0">0</td>
          <td id="bmt0">0</td>
        </tr>
        <tr>
          <td id="bmh1">0</td>
          <td id="bmv1">0</td>
          <td id="bmt1">0</td>
        </tr>
        <tr>
          <td id="bmh2">0</td>
          <td id="bmv2">0</td>
          <td id="bmt2">0</td>
        </tr>
        <tr>
          <td id="bmh3">0</td>
          <td id="bmv3">0</td>
          <td id="bmt3">0</td>
        </tr>
        <tr>
          <td id="bmh4">0</td>
          <td id="bmv4">0</td>
          <td id="bmt4">0</td>
        </tr>
        <tr>
          <td id="bmh5">0</td>
          <td id="bmv5">0</td>
          <td id="bmt5">0</td>
        </tr>
        <tr>
          <td id="bmh6">0</td>
          <td id="bmv6">0</td>
          <td id="bmt6">0</td>
        </tr>
        <tr>
          <td id="bmh7">0</td>
          <td id="bmv7">0</td>
          <td id="bmt7">0</td>
        </tr>
        <tr>
          <td id="bmh8">0</td>
          <td id="bmv8">0</td>
          <td id="bmt8">0</td>
        </tr>
        <tr>
          <td id="bmh9">0</td>
          <td id="bmv9">0</td>
          <td id="bmt9">0</td>
        </tr>
        <tr>
          <td id="bmh10">0</td>
          <td id="bmv10">0</td>
          <td id="bmt10">0</td>
        </tr>
        <tr>
          <td id="bmh11">0</td>
          <td id="bmv11">0</td>
          <td id="bmt11">0</td>
        </tr>
        <tr>
          <td id="bmh12">0</td>
          <td id="bmv12">0</td>
          <td id="bmt12">0</td>
        </tr>
        <tr>
          <td id="bmh13">0</td>
          <td id="bmv13">0</td>
          <td id="bmt13">0</td>
        </tr>
        <tr>
          <td id="bmh14">0</td>
          <td id="bmv14">0</td>
          <td id="bmt14">0</td>
        </tr>
        <tr>
          <td id="bmh15">0</td>
          <td id="bmv15">0</td>
          <td id="bmt15">0</td>
        </tr>
        <tr>
          <td id="bmh16">0</td>
          <td id="bmv16">0</td>
          <td id="bmt16">0</td>
        </tr>
        <tr>
          <td id="bmh17">0</td>
          <td id="bmv17">0</td>
          <td id="bmt17">0</td>
        </tr>
        <tr>
          <td id="bmh18">0</td>
          <td id="bmv18">0</td>
          <td id="bmt18">0</td>
        </tr>
        <tr>
          <td id="bmh19">0</td>
          <td id="bmv19">0</td>
          <td id="bmt19">0</td>
        </tr>
        <tr>
          <td id="bmh20">0</td>
          <td id="bmv20">0</td>
          <td id="bmt20">0</td>
        </tr>
    </table>
  </div>
</div>

<br><br>
<p>Code with <i class="empty heart icon"></i> by <a href="https://web.facebook.com/Ipoel.kripul">Kripul</a></p>
<br><br>
</center>

  </div> <!-- end ui main text -->

<script>
  
function convertToRupiah(angka)
{
  var rupiah = '';    
  var angkarev = angka.toString().split('').reverse().join('');
  for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
  return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

$(document).ready(function () {

  function price(){
    var btcPrice = (function () {
    var btcPrice = null;
      $.ajax({
          'async': false,
          'global': false,
          'url': "https://vip.bitcoin.co.id/api/btc_idr/ticker",
          'dataType': "json",
          'success': function (data) {
              btcPrice = data.ticker.last;
          }
      });
    return btcPrice;
    })(); 

    $.getJSON('https://poloniex.com/public?command=returnTicker', function(data){
      document.getElementById('PoloniexLast').innerHTML = convertToRupiah(Math.floor(data.BTC_XRP.last*btcPrice));
      document.getElementById('PoloniexBid').innerHTML = convertToRupiah(Math.floor(data.BTC_XRP.highestBid*btcPrice));
      document.getElementById('PoloniexAsk').innerHTML = convertToRupiah(Math.floor(data.BTC_XRP.lowestAsk*btcPrice));
    });

    // $.getJSON('libs/funcXrp.php', function(data){
    //   document.getElementById('BittrexLast').innerHTML = convertToRupiah(Math.floor(data.Bittrex*btcPrice));
    //   document.getElementById('BittrexBid').innerHTML = convertToRupiah(Math.floor(data.BittrexBid*btcPrice));
    //   document.getElementById('BittrexAsk').innerHTML = convertToRupiah(Math.floor(data.BittrexAsk*btcPrice));
    // });

    $.getJSON('https://vip.bitcoin.co.id/api/xrp_idr/ticker', function(data) {
      document.getElementById('priceLast').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('priceLashBuy').innerHTML = convertToRupiah(data.ticker.buy);
      document.getElementById('priceLashSell').innerHTML = convertToRupiah(data.ticker.sell);
      document.getElementById('priceTodayHigh').innerHTML = convertToRupiah(data.ticker.high);
      document.getElementById('priceTodayLow').innerHTML = convertToRupiah(data.ticker.low);
      document.getElementById('totalVIP').innerHTML = Math.floor(data.ticker.vol_xrp);
      document.getElementById('totalVIPrp').innerHTML = convertToRupiah(Math.floor(data.ticker.vol_xrp)*data.ticker.low);
      document.title = "XRP " + convertToRupiah(data.ticker.last);
    });
  }

  function depth(){
    var totalbuy = 0;
    var totalsell = 0;

    $.getJSON('https://vip.bitcoin.co.id/api/xrp_idr/depth', function(data){  

      for (var i = 0; i < data['buy'].length; i++) {
        totalbuy += parseFloat(data['buy'][i][1]);
        totalsell += parseFloat(data['sell'][i][1]);
      }

      document.getElementById('totalBuy').innerHTML = Math.floor(totalbuy);
      document.getElementById('totalSell').innerHTML = Math.floor(totalsell);
      document.getElementById('totalBuy').innerHTML = Math.floor(totalbuy);
      document.getElementById('selisih').innerHTML = Math.floor(totalsell-totalbuy);

      $.each(data.buy, function(i,val){
        if(i > 20){
          return false;
        }
        document.getElementById('bmh' + i).innerHTML = convertToRupiah(val[0]);
        document.getElementById('bmv' + i).innerHTML = val[1];
        document.getElementById('bmt' + i).innerHTML = convertToRupiah(Math.round(val[0]*val[1]));  
      });

      $.each(data.sell, function(i,val){
        if(i > 20){
          return false;
        }
        document.getElementById('smh' + i).innerHTML = convertToRupiah(val[0]);
        document.getElementById('smv' + i).innerHTML = val[1];
        document.getElementById('smt' + i).innerHTML = convertToRupiah(Math.round(val[0]*val[1]));
        
      });

    });
  }


setInterval(price, 3000);
setInterval(depth, 3000);

});
</script>
</body>

</html>