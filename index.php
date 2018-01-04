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
      <a href="/" class="item active" id="priceLastmenubtc">HOME</a>
      <a href="btc.php" class="item" id="priceLastmenubtc">BTC</a>
      <a href="bch.php" class="item" id="priceLastmenubch">BCH</a>
      <a href="btg.php" class="item" id="priceLastmenubch">BTG</a>
      <a href="eth.php" class="item" id="priceLastmenueth">ETH</a>
      <a href="etc.php" class="item" id="priceLastmenuetc">ETC</a>
      <a href="ignis.php" class="item" id="priceLastmenubch">IGNIS</a>
      <a href="ltc.php" class="item" id="priceLastmenultc">LTC</a>
      <a href="nxt.php" class="item" id="priceLastmenultc">NXT</a>
      <a href="waves.php" class="item" id="priceLastmenuwaves">WAVES</a>
      <a href="xlm.php" class="item" id="priceLastmenuxlm">XLM</a>
      <a href="xrp.php" class="item" id="priceLastmenuxrp">XRP</a>
      <a href="xzc.php" class="item" id="priceLastmenubxzc">XZC</a>
    </div>

<center>
<br>

<table class="ui celled padded table">
  <thead>
  <tr>
    <th width="16%">MARKET</th>
    <th width="16%">HARGA</th>
    <th width="16%">VOLUME</th>
  </tr>
</thead>
  <tr>
    <td>BTC</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
    <tr>
    <td>BCH</td>
    <td id="ethLastBtc">0</td>
    <td id="ltcLastBtc">0</td>
  </tr>
  <tr>
    <td>BTC</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>  
  <tr>
    <td>ETH</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>  
  <tr>
    <td>ETC</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>  
  <tr>
    <td>IGNIS</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>  
  <tr>
    <td>LTC</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
  <tr>
    <td>WAVES</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
  <tr>
    <td>XLM</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
  <tr>
    <td>XRP</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
  <tr>
    <td>XZC</td>
    <td id="ethLastIdr">0</td>
    <td id="ltcLastIdr">0</td>
  </tr>
</table>
<br>




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

    document.getElementById('xx').innerHTML = 'Harga BTC :' + convertToRupiah(btcPrice);

    $.getJSON('https://vip.bitcoin.co.id/api/xrp_idr/ticker', function(data) {
      document.getElementById('xrpLastIdr').innerHTML = convertToRupiah(data.ticker.last);
    });
    $.getJSON('https://vip.bitcoin.co.id/api/xrp_btc/ticker', function(data) {
      document.getElementById('xrpLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });


    $.getJSON('https://vip.bitcoin.co.id/api/str_idr/ticker', function(data) {
      document.getElementById('xlmLastIdr').innerHTML = convertToRupiah(data.ticker.last);
    });
    $.getJSON('https://vip.bitcoin.co.id/api/str_btc/ticker', function(data) {
      document.getElementById('xlmLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/nxt_idr/ticker', function(data) {
      document.getElementById('nxtLastIdr').innerHTML = convertToRupiah(data.ticker.last);
    });
    $.getJSON('https://vip.bitcoin.co.id/api/nxt_btc/ticker', function(data) {
      document.getElementById('nxtLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/ltc_idr/ticker', function(data) {
      document.getElementById('ltcLastIdr').innerHTML = convertToRupiah(data.ticker.last);
    });
    $.getJSON('https://vip.bitcoin.co.id/api/ltc_btc/ticker', function(data) {
      document.getElementById('ltcLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

    $.getJSON('https://vip.bitcoin.co.id/api/eth_idr/ticker', function(data) {
      document.getElementById('ethLastIdr').innerHTML = convertToRupiah(data.ticker.last);
    });
    $.getJSON('https://vip.bitcoin.co.id/api/eth_btc/ticker', function(data) {
      document.getElementById('ethLastBtc').innerHTML = convertToRupiah(Math.round(data.ticker.last*btcPrice));
    });

  }



setInterval(price, 2000);

});
</script>
</body>

</html>