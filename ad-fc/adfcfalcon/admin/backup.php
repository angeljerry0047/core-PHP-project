<?php
ob_start();
include_once('includes/session.php');
include('includes/connection.php');
?> 


<?php 

	echo "CREATE TABLE `one_way_admin_setup` (
  `id` int(11) NOT NULL auto_increment,
  `terms` text NOT NULL,
  `disclaimer` text NOT NULL,
  `trial_period` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `talert` int(11) NOT NULL,
  `salert` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;";

    $strSQL = "SELECT * FROM one_way_admin_setup";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_admin_setup` (`id`, `terms`, `disclaimer`, `trial_period`, `color`, `talert`, `salert`) VALUES  "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, '0', '0', '$row->trial_period', '$row->color', $row->talert, $row->salert)";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
	
	    echo "CREATE TABLE `one_way_country` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=229 ;";

    $strSQL = "SELECT * FROM one_way_country";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_country` (`id`, `name`) VALUES "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	    
        $str=$str.$run."($row->id,'$row->name')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
	
	echo "CREATE TABLE `one_way_group` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product Group' AUTO_INCREMENT=10 ;";

    $strSQL = "SELECT * FROM one_way_group";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_group` (`id`, `name`, `details`) VALUES "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	    
        $str=$str.$run."($row->id, '$row->name',' $row->details')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
/*		echo "CREATE TABLE `one_way_message` (
  `id` int(11) NOT NULL auto_increment,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `message` text character set utf8 NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `product` varchar(255) NOT NULL,
  `viewed` int(11) NOT NULL default '0',
  `language` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Messge Details' AUTO_INCREMENT=13 ;";

    $strSQL = "SELECT * FROM one_way_message";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_message` (`id`, `from_user_id`, `to_user_id`, `message`, `date`, `time`, `product`, `viewed`, `language`) VALUES "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, $row->from_user_id, $row->to_user_id, '$row->message', '$row->date', '$row->time', $row->product, `viewed`, '$row->language')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;*/
	
		echo "CREATE TABLE `one_way_product` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product Table' AUTO_INCREMENT=13 ;";

    $strSQL = "SELECT * FROM one_way_product";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_product` (`id`, `name`, `details`, `code`) VALUES  "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, '$row->name', '$row->details', '$row->code')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
		echo "CREATE TABLE `one_way_product_group` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Group User Table ' AUTO_INCREMENT=50 ;";

    $strSQL = "SELECT * FROM one_way_product_group";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_product_group` (`id`, `product_id`, `group_id`) VALUES   "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, $row->product_id, $row->group_id)";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
		echo "CREATE TABLE `one_way_product_setup` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) collate utf8_unicode_ci NOT NULL,
  `font` varchar(255) collate utf8_unicode_ci NOT NULL,
  `size` varchar(255) collate utf8_unicode_ci NOT NULL,
  `sound` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Product Setup' AUTO_INCREMENT=11 ;";

    $strSQL = "SELECT * FROM one_way_product_setup";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_product_setup` (`id`, `user_id`, `product_id`, `color`, `font`, `size`, `sound`) VALUES  "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, $row->user_id, $row->product_id, '$row->color', '$row->font', '$row->size', '$row->sound')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
/*	
		echo "CREATE TABLE `one_way_send_message` (
  `id` int(11) NOT NULL auto_increment,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `message` text character set utf8 NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `product` varchar(255) NOT NULL,
  `viewed` int(11) NOT NULL default '0',
  `language` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Messge Details' AUTO_INCREMENT=1 ;
";

    $strSQL = "SELECT * FROM one_way_send_message";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_send_message` (`id` ,`from_user_id` ,`to_user_id` ,`message` ,`date` ,`time` ,`product` ,`viewed` ,`language`) VALUES "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."('$row->id' ,'$row->from_user_id' ,'$row->to_user_id' ,'$row->message' ,'$row->date' ,'$row->time' ,'$row->product' ,'$row->viewed' ,'$row->language')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;*/
	
	
	
		echo "CREATE TABLE `one_way_user` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `language` varchar(20) NOT NULL,
  `max_no_of_user` int(11) NOT NULL,
  `credit_card_no` varchar(30) NOT NULL,
  `card_holder_name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `islogin` int(11) NOT NULL,
  `family_name` varchar(256) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `street` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `date1` varchar(256) NOT NULL,
  `province` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `cheque_date` varchar(256) NOT NULL,
  `cheque_number` varchar(256) NOT NULL,
  `bank_name` varchar(256) NOT NULL,
  `payable_at` varchar(256) NOT NULL,
  `ipaddress` varchar(16) NOT NULL,
  `color` varchar(10) NOT NULL default '#CC3399',
  `lastlogin` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Table' AUTO_INCREMENT=3 ;";

    $strSQL = "SELECT * FROM one_way_user";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_user` (`id`, `user_id`, `password`, `name`, `address`, `email_id`, `account_type`, `image`, `parent_id`, `language`, `max_no_of_user`, `credit_card_no`, `card_holder_name`, `status`, `created_by`, `islogin`, `family_name`, `phone`, `street`, `city`, `date`, `date1`, `province`, `country`, `amount`, `cheque_date`, `cheque_number`, `bank_name`, `payable_at`, `ipaddress`, `color`, `lastlogin`) VALUES "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."($row->id, '$row->user_id', '$row->password', '$row->name', '$row->address','$row->email_id','$row->account_type','$row->image','$row->parent_id','$row->language','$row->max_no_of_user','$row->credit_card_no','$row->card_holder_name','$row->status','$row->created_by','$row->islogin','$row->family_name','$row->phone','$row->street','$row->city','$row->date','$row->date1','$row->province','$row->country','$row->amount','$row->cheque_date','$row->cheque_number','$row->bank_name','$row->payable_at','$row->ipaddress','$row->color','$row->lastlogin')";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
	echo "CREATE TABLE `one_way_user_group` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Group User Table ' AUTO_INCREMENT=57 ;";

    $strSQL = "SELECT * FROM one_way_send_message";
    $objRS = mysql_query ($strSQL);
	$str="INSERT INTO `one_way_user_group` (`id`, `user_id`, `group_id`) VALUES  "; 

    $run="";
	while ($row = mysql_fetch_object($objRS)) 
    {  
	   
        $str=$str.$run."('$row->id', '$row->user_id', '$row->group_id') ";
		$run=",";
		 
    }   
    $str=$str.";";
    echo $str;
	
	 $date=date('d-m-Y',mktime(date('H')+10,date('i')+1,date('s')));
	 $time=date('H:i:s',mktime(date('H')+10,date('i')+1,date('s')));
	 $lastlogin=$date."_".$time;
    $filename="Backup_".$lastlogin;
	
   $ext = "txt";   // file extension
   $mime_type = (PMA_USR_BROWSER_AGENT == 'IE' || PMA_USR_BROWSER_AGENT == 'OPERA')
   ? 'application/octetstream'
   : 'application/octet-stream';
   header('Content-Type: ' . $mime_type);
   if (PMA_USR_BROWSER_AGENT == 'IE')
   {
      header('Content-Disposition: inline; filename="' . $filename . '.' . $ext . '"');
      header("Content-Transfer-Encoding: binary");
      header('Expires: 0');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Pragma: public');
   
   } else {
      header('Content-Disposition: attachment; filename="' . $filename . '.' . $ext . '"');
      header("Content-Transfer-Encoding: binary");
      header('Expires: 0');
      header('Pragma: no-cache');
      
   }


?>

