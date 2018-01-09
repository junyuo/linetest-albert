<?php
  // echo "hello i'm albert"
  $json_str = file_get_contents('php://input'); // 接收 request body
  $json_obj = json_decode($json_str); // convert to JSON format

  $myfile = fopen("log.txt", "w+") or die("unable to open file!");
  fwrite($myfile,  "\xEF\xBB\xBf".$json_str); // 在字串前加入 \xEF\xBB\Bf 轉成 utf8 format
  fclose($myfile);
?>
