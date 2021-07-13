<?php

$rand = time();
$file = fopen ("http://www.google.com/", "r");
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