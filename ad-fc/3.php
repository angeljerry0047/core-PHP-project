<?php

$rand = time();
//$file = @fopen ("http://charts.futuresource.com/cis/fscom?cont=dj1%21&period=V&varminutes=15&size=150x150&bartype=AREA&bardensity=MEDIUM&headerbackground=(221,221,221)&headerforeground=(102,102,102)&headerdatacolor=(0,1,125)&studyheaderbackground=(221,221,221)&showextendednames=true&random={$rand}", "r");
$file = @fopen ("http://charts.futuresource.com/cis/fscom?cont=qec%201%21&period=V&varminutes=15&size=150x150&bartype=AREA&bardensity=MEDIUM&headerbackground=(221,221,221)&headerforeground=(102,102,102)&headerdatacolor=(0,1,125)&studyheaderbackground=(221,221,221)&showextendednames=true&random={$rand}", "r");
if ($file) {

  $sResponse = "";
  while (!feof ($file)) {
    $sResponse .= fgets ($file, 1024);
  }
  fclose($file);

  echo $sResponse;
  exit();

}

?>