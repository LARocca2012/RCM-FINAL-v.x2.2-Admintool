<?php

////$r_ch = trim($chistx);
if (strpos($msgr, $ixz.'gt ') !== false){
	
	
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");

////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
// list($nickr, $msgr) = explode(' % ', $parselinetxt);  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
   foreach($result as $row)
    { 		
   $adm_ip  = $row['s_adm'];
    $a_grp  = $row['s_group'];
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ipn) && (($a_grp == 0) || ($a_grp == 111))); 
else
 $jjj = (($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      {		  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 


 list($x_cmd, $x_gametype) = explode(' ', $msgr);   // !gt sd 
$i_namex = aaxa($i_name);	

$x_gt = gtt($x_gametype);

if($x_gt == '^3_actf' 
|| $x_gt == '^2tdm'
|| $x_gt == '^9old^5sd'
|| $x_gt == '^5sd'
|| $x_gt == '^1htf'
|| $x_gt == '^6gun'
|| $x_gt == 'bash'
|| $x_gt == 'dm'){

if ($x_number == 0){	
	usleep($sleep_rcon);
	rcon('say ^6 ^3Admin changed gametype to '.$x_gt, '');
	sleep(1);	 	
	rcon('set g_gametype '.$x_gt.'', '');
	AddToLog("[".$datetime."] Gametype CHANGE: (" . $i_ipn . ") (" . $i_id . ") BY: (" . $x_nickx . ") ");    
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> Admin changed gametype to ".$x_gt. " ");
	++$x_return;
	++$x_number;
	}else{
++$x_number;
++$x_return;	
	}		 	
		//++$x_number;
		
}else{
echo "  False gametype";
usleep($sleep_rcon);	
rcon('say ^6 ^1False gametype!', '');	
++$x_number;
++$x_return;
     }	

			
   }
     }
	   
}	}
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	   
?>
 