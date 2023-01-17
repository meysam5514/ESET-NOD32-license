<?php
//========================================================= 
error_reporting(0);
header('Content-type: application/json;');
//$get=file_get_contents('https://t2bot.ru/en/esetkeys/');

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://t2bot.ru/en/esetkeys/");
//curl_setopt($ch1, CURLOPT_POST, true);
//curl_setopt($ch1, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_HEADER, true);
curl_setopt($ch1, CURLOPT_COOKIEJAR,"cooki.txt");
curl_setopt($ch1, CURLOPT_COOKIEFILE, "cooki.txt");
//curl_setopt($ch1, CURLOPT_USERAGENT, 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');
curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers1);
//➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
$headers1 = array();
$headers1[] = ':authority: t2bot.ru';
$headers1[] = ':method: GET';
$headers1[] = ':path: /en/esetkeys/';
$headers1[] = ':scheme: https';
$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers1[] = 'accept-encoding: gzip, deflate, br';
$headers1[] = 'accept-language: en-US,en;q=0.9';
$headers1[] = 'cache-control: max-age=0';
$headers1[] = 'if-modified-since: Wed, 12 Jan 2022 11:42:02 GMT';
$headers1[] = 'sec-ch-ua: " Not;A Brand";v="99", "Google Chrome";v="97", "Chromium";v="97"';
$headers1[] = 'sec-ch-ua-mobile: ?0';
$headers1[] = 'sec-ch-ua-platform: "Windows"';
$headers1[] = 'sec-fetch-dest: document';
$headers1[] = 'sec-fetch-mode: navigate';
$headers1[] = 'sec-fetch-site: none';
$headers1[] = 'sec-fetch-user: ?1';    
$headers1[] = 'upgrade-insecure-requests: 1';    
$headers1[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36';    
//➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
$get= curl_exec($ch1);
curl_close($ch1);

//========================================================= 
preg_match_all('#<h2>ANTIVIRUS</h2>
    <div>Activation keys</div>
<p>(.*?)</p><p>(.*?)</p><p>(.*?)</p>    <span>The keys are valid until (.*?)</span>#',$get,$antivirus);
//========================================================= 
preg_match_all('#<h2>Internet Security</h2>
      <div>Activation keys</div>
<p>(.*?)</p><p>(.*?)</p><p>(.*?)</p>      <span>The keys are valid until (.*?)</span>#',$get,$internetsecurity);            
//========================================================= 
preg_match_all('#<h2>ANTIVIRUS 4-8</h2>
<table>
  <tr><th>Username</th><th>Password</th></tr>
  <tr><td>(.*?)</td><td>(.*?)</td></tr><tr><td>(.*?)</td><td>(.*?)</td></tr><tr><td>(.*?)</td><td>(.*?)</td></tr></table>

    <span>The keys are valid until (.*?)</span>#',$get,$ANTIVIRUS4_8);    
//=========================================================     
preg_match_all('#<h2>Smart Security 4-8</h2>
<table>
  <tr><th>Username</th><th>Password</th></tr>
  <tr><td>(.*?)</td><td>(.*?)</td></tr><tr><td>(.*?)</td><td>(.*?)</td></tr><tr><td>(.*?)</td><td>(.*?)</td></tr></table>    <span>The keys are valid until (.*?)</span>#',$get,$smartsecurity4_8);     
//========================================================= 
preg_match_all('#<h2>Mobile Security</h2>
<p>(.*?)</p><p>(.*?)</p><p>(.*?)</p>    <span>The keys are valid until (.*?)</span>#',$get,$mobilesecurity);        
//=========================================================  
$antivirus1 = array();    
$antivirus1['key1']= $antivirus[1];  
$antivirus1['key2']= $antivirus[2];    
$antivirus1['key3']= $antivirus[3];    
$antivirus1['expire']= $antivirus[4];    
//=========================================================    
$internetsecurity1 = array();  
$internetsecurity1['key1']= $internetsecurity[1];  
$internetsecurity1['key2']= $internetsecurity[2];    
$internetsecurity1['key3']= $internetsecurity[3];    
$internetsecurity1['expire']= $internetsecurity[4];     
//=========================================================      
$ANTIVIRUS4_81 = array();  
$ANTIVIRUS4_81['user1']= $ANTIVIRUS4_8[1];  
$ANTIVIRUS4_81['pass1']= $ANTIVIRUS4_8[2];    
$ANTIVIRUS4_81['user2']= $ANTIVIRUS4_8[3];    
$ANTIVIRUS4_81['pass2']= $ANTIVIRUS4_8[4];
$ANTIVIRUS4_81['user3']= $ANTIVIRUS4_8[5];    
$ANTIVIRUS4_81['pass3']= $ANTIVIRUS4_8[6];
$ANTIVIRUS4_81['expire']= $ANTIVIRUS4_8[7];
//=========================================================      
$smartsecurity4_81 = array(); 
$smartsecurity4_81['user1']= $smartsecurity4_8[1];  
$smartsecurity4_81['pass1']= $smartsecurity4_8[2];    
$smartsecurity4_81['user2']= $smartsecurity4_8[3];    
$smartsecurity4_81['pass2']= $smartsecurity4_8[4];
$smartsecurity4_81['user3']= $smartsecurity4_8[5];    
$smartsecurity4_81['pass3']= $smartsecurity4_8[6];
$smartsecurity4_81['expire']= $smartsecurity4_8[7];
//=========================================================    
$mobilesecurity1 = array();   
$mobilesecurity1['key1']= $mobilesecurity[1];  
$mobilesecurity1['key2']= $mobilesecurity[2];    
$mobilesecurity1['key3']= $mobilesecurity[3];    
$mobilesecurity1['expire']= $mobilesecurity[4];     
//========================================================= 
echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71',  'Results' =>['ANTIVIRUS'=>$antivirus1,'INTERNET SECURITY'=>$internetsecurity1,'ANTIVIRUS 4-8'=>$ANTIVIRUS4_81,'SMART SECURITY 4-8'=>$smartsecurity4_81,'MOBILE SECURITY'=>$mobilesecurity1]], 448);






