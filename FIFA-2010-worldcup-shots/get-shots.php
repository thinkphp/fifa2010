<?php
header('Content-type: text/javascript');
echo 'var fifa = {}; fifa.data = ';
$url = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20csv%20where%20url%3D%22http%3A%2F%2Fspreadsheets.google.com%2Fpub%3Fkey%3D0AonYZs4MzlZbdE9NMnFSRW1QVWJ2NzZ3YXVtckVFWWc%26hl%3Den%26gid%3D0%26output%3Dcsv%22&format=json";
$output = get($url);
echo$output;

    function get($url) {
          $ch = curl_init();
          curl_setopt($ch,CURLOPT_URL,$url);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
          curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
          $data = curl_exec($ch);
          curl_close($ch); 
          if(empty($data)) {return 'Server Timeout. Try agai later!';}
                 else {return $data;}
    }
?>