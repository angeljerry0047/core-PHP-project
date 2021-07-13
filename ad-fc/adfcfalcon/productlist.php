<?php

include("config.php");

?> 


<?php 

    $id=$_GET['id'];
	echo $l=$_GET['l'];
	 
	if($id=="")
      $strSQL = "SELECT id,name,code,aname,acode FROM one_way_product order by name";
	else
	  $strSQL = "SELECT distinct one_way_product.id,one_way_product.name,one_way_product.code,one_way_product.aname,one_way_product.acode FROM one_way_product,one_way_product_group,one_way_user_group  where one_way_product.id=one_way_product_group.product_id and one_way_product_group.group_id=one_way_user_group.group_id and one_way_user_group.user_id=".$id." order by one_way_product.name";

	//echo $strSQL;



    $objRS = mysql_query ($strSQL); //returns data from slaves

    $productlist="productlist";
    while ($row = mysql_fetch_row($objRS)) 
    {  
     if($l!="arb")
	 	$productlist=$productlist."#".$row[0]."~".$row[1]."~".$row[2];
	 else
	    $productlist=$productlist."#".$row[0]."~".$row[3]."~".$row[4];
	
	}   
	echo $productlist;
	mysql_close($link);
?>