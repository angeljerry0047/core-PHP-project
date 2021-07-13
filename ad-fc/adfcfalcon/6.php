<?php

$rand = time();
$file = fopen ("http://www.google.co.in/search?hl=en&q=java&meta=", "r");
if ($file) {

  $sResponse = "";
  while (!feof ($file)) {
    $sResponse .= fgets ($file, 1024);
  }
  fclose($file);

  echo $sResponse;
  exit();

}

echo "not work";

?>