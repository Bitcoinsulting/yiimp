<?php

require_once("cryptsy.php");
require_once("poloniex.php");
require_once("bittrex.php");
require_once("ccexapi.php");
require_once("bleutrade.php");
require_once("yobit.php");
require_once("allcoin.php");
require_once("bter.php");
require_once("empoex.php");
require_once("jubi.php");
require_once("alcurex.php");
require_once("cryptopia.php");
require_once("banxio.php");

/* Format an exchange coin Url */
function getMarketUrl($coin, $marketName)
{
	$symbol = !empty($coin->symbol2) ? $coin->symbol2 : $coin->symbol;
	$lowsymbol = strtolower($symbol);

	if($marketName == 'cryptsy')
		$url = "https://www.cryptsy.com/markets/view/{$symbol}_BTC";
	else if($marketName == 'bittrex')
		$url = "https://bittrex.com/Market/Index?MarketName=BTC-{$symbol}";
	else if($marketName == 'poloniex')
		$url = "https://poloniex.com/exchange#btc_{$lowsymbol}";
	else if($marketName == 'bleutrade')
		$url = "https://bleutrade.com/exchange/{$symbol}/BTC";
	else if($marketName == 'c-cex')
		$url = "https://c-cex.com/?p={$lowsymbol}-btc";
	else if($marketName == 'jubi')
		$url = "http://jubi.com/coin/{$lowsymbol}";
	else if($marketName == 'yobit')
		$url = "https://yobit.net/en/trade/{$symbol}/BTC";
	else if($marketName == 'cryptopia')
		$url = "https://www.cryptopia.co.nz/Exchange?market={$symbol}_BTC";
	else if($marketName == 'alcurex')
		$url = "https://alcurex.org/index.php/crypto/market?pair={$lowsymbol}_btc";
	else if($marketName == 'allcoin')
		$url = "https://www.allcoin.com/trade/{$symbol}_BTC";
	else if($marketName == 'bter')
		$url = "https://bter.com/trade/{$lowsymbol}_btc";
	else if($marketName == 'banx')
		$url = "https://www.banx.io/trade?c={$symbol}&p=BTC";
	else if($marketName == 'bitex')
		$url = "https://bitex.club/markets/{$lowsymbol}btc";
	else if($marketName == 'empoex')
		$url = "http://www.empoex.com/trade/{$symbol}-BTC";
	else
		$url = "";

	return $url;
}
