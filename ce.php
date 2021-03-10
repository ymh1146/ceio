<?php
ini_set('max_execution_time',1200);
function httpcode($url){
  $ch = curl_init();
  $timeout = 120;
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_exec($ch);
  return $httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
  curl_close($ch);
}
$check_web = array(
'https://www.zhuijuju.com/api.php/timming/index.html?name=aa',
'https://www.zhuijuju.com/api.php/timming/index.html?name=ab',
'https://www.zhuijuju.com/api.php/timming/index.html?name=ac',
'https://www.zhuijuju.com/api.php/timming/index.html?name=ad',
'https://www.zhuijuju.com/api.php/timming/index.html?name=ae',
'https://www.zhuijuju.com/api.php/timming/index.html?name=bb',
'https://www.zhuijuju.com/api.php/timming/index.html?name=ba',
'https://www.zhuijuju.com/api.php/timming/index.html?name=hc',
'https://www.zhuijuju.com/api.php/timming/index.html?name=z1',
'https://www.zhuijuju.com/api.php/timming/index.html?name=xz1',
);
for($i=0;$i<count($check_web);$i++){
  echo $check_web[$i].' -> '.httpcode($check_web[$i]).'<br>';
}
?>
