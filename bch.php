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
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="dist/semantic.js"></script>

  <style type="text/css">
  body {
    padding: 1em;
    background-color: #FFFFFF;
    font-size: 110%;
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

.ui.action.input input[type="file"] {
  display: none;
}


  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item">
        Koin
      </a>
      <!-- <a href="/" class="item">Home</a> -->

    </div>
  </div>

  <div class="ui main container">
    
    <div class="ui secondary  menu">
      <a href="/" class="item">
        BTC
      </a>
      <a href="bch.php" class="active item">
        BCH
      </a>
      <a href="eth.php" class="item">
        ETH
      </a>
    </div>


<center>
  <h3>Volume BCH</h3>
<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="20%">Total BCH Sell</th>
    <th width="20%">Total BCH Buy</th>
    <th width="20%">Selisih Sell - Buy</th>
    <th width="20%">Total BCH on Market</th>
    <th width="20%">Total BCH VIP</th>
  </tr>
  </thead>
  <tr>
    <td id="totalSell">0</td>
    <td id="totalBuy">0</td>
    <td id="selisih">0</td>
    <td id="totalMarket">0</td>
    <td id="totalVIP">0</td>
  </tr>

</table>
<br>

<h3>Price BCH</h3>
<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="20%">Market</th>
    <th width="20%">Harga Terkini</th>
    <th width="20%">Sell terkini</th>
    <th width="20%">Buy Terkini</th>
    <th width="20%">Sell Tertinggi Today</th>
    <th width="20%">Buy Terendah Today</th>
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
    <td id="bchBittrex">0</td>
    <td id="bchBittrexAsk">0</td>
    <td id="bchBittrexBid">0</td>
    <td id="">0</td>
    <td id="">0</td>
  </tr>
   <tr>
    <td>Poloniex</td>
    <td id="bchPoloniex">0</td>
    <td id="bchPoloniexAsk">0</td>
    <td id="bchPoloniexBid">0</td>
    <td id="">0</td>
    <td id="">0</td>
  </tr>
</table>


<h3>Rerata VIP</h3>
<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="170">Rerata Sell</th>
    <th width="170">Rerata Buy</th>
  </tr>
</thead>
  <tr>
    <td id="rerataSell">0</td>
    <td id="rerataBuy">0</td>
  </tr>
</table>

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
  return rupiah.split('',rupiah.length-1).reverse().join('');
}

$(document).ready(function () {
  function volume(){
  $.getJSON('funcBch.php', function(data) {
      document.getElementById('totalSell').innerHTML = data.totalSell;
      document.getElementById('totalBuy').innerHTML = data.totalBuy;
      document.getElementById('totalVIP').innerHTML = data.totalVIP;
      document.getElementById('selisih').innerHTML = data.totalSell-data.totalBuy;
      document.getElementById('totalMarket').innerHTML = data.totalBuy+data.totalSell;


      document.getElementById('bchBittrex').innerHTML = convertToRupiah(data.bchBittrex);
      document.getElementById('bchBittrexAsk').innerHTML = convertToRupiah(data.bchBittrexAsk);
      document.getElementById('bchBittrexBid').innerHTML = convertToRupiah(data.bchBittrexBid);

      document.getElementById('bchPoloniex').innerHTML = convertToRupiah(data.bchPoloniex);
      document.getElementById('bchPoloniexAsk').innerHTML = convertToRupiah(data.bchPoloniexAsk);
      document.getElementById('bchPoloniexBid').innerHTML = convertToRupiah(data.bchPoloniexBid);

      document.getElementById('rerataSell').innerHTML = convertToRupiah(data.rerataSell);
      document.getElementById('rerataBuy').innerHTML = convertToRupiah(data.rerataBuy);
      //document.getElementById('selisihBittrex').innerHTML = convertToRupiah(data.bchBittrex-data.ticker.last);
    });
}
    function price(){
  $.getJSON('https://vip.bitcoin.co.id/api/bch_idr/ticker', function(data) {
      document.getElementById('priceLast').innerHTML = convertToRupiah(data.ticker.last);
      document.getElementById('priceLashBuy').innerHTML = convertToRupiah(data.ticker.buy);
      document.getElementById('priceLashSell').innerHTML = convertToRupiah(data.ticker.sell);
      document.getElementById('priceTodayHigh').innerHTML = convertToRupiah(data.ticker.high);
      document.getElementById('priceTodayLow').innerHTML = convertToRupiah(data.ticker.low);
      document.title = convertToRupiah(data.ticker.last);


    });
}
  function bittrex(){
    $.getJSON('https://bittrex.com/api/v1.1/public/getticker?market=btc-bcc', function(data){

    });
  }
setInterval(volume, 2000);
setInterval(price, 2000);

});
</script>
</body>

</html>