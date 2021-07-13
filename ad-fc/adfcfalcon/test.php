<?php 
echo date('H:i:s')." # ";
echo date('H:i:s',mktime(date('H')+10,date('i')+1,date('s')))." # ";

echo date('Y:m:d')." # ";
echo date('Y:m:d',mktime(date('H')+10,date('i')+1,date('s')))." # ";
?>