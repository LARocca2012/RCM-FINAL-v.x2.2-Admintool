<?php
if ($x_stop_lp == 0 ) {
 if (strpos($msgr, $ixz.'ban ') !== false){ 
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
//$vipt = (array_search($r_ch, $r_adm, true) !== false);

if ($web_con == '0'){ 
list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip); 
$ipt = (array_search($i1p.'.'.$i2p.'.'.$i3p, $r_admi, true) !== false);}
else if (($web_con == '1') && ($x_stop_lp == 0 )){ 

try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
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
  $i_ip = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
   
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))); 
else
 $jjj = (($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)));
    if($jjj)
	      { 
		  
 list($x_cmd, $x_idn, $x_reason) = explode(' ', $msgr);   // !ban 5 Wh ( 5 = id  wh = reason)

 if ($x_reason=='')
$x_reason = 'None';

 for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 


$i_namex = aaxa($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk); 
	  if($x_bann[0] == $x_idn)
	     {
 
	$db2->exec("INSERT INTO bans (playername,ip,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','$x_reason','$datetime','$x_nickx','$game_patch')");	 
 
	usleep($sleep_rcon);

if (($game_ac == '0') && ($x_stop_lp == 0 )){  
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason:^1" "'.$x_reason.'"', '');

if ($game_patch == 'cod4'){
	usleep($sleep_rcon);
	rcon('getss '. $i_id, '');
	usleep($sleep_rcon); 
	rcon('permban '. $i_id.' you have ban with reason ['.$x_reason.']!', '');
	usleep($sleep_rcon);
        rcon('clientkick '. $i_id, '');
}else{
	usleep($sleep_rcon); 
	usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');
}
	AddToLog("[".$datetime."] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");    
	++$x_number;	
	++$x_stop_lp;
echo '  ban  '.substr((microtime(true) - $start),0,7);
   //return;
}
else { 
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason:^1" "'.$x_reason.'"^6[^7BAN By Admin^6]""', '');
	usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7BAN By Admin^6]"', ''); }
	AddToLog("[".$datetime."] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");    
	++$x_number;	
	
echo '  ban  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;
   //return;	
	}

}
}
}



$result = null;
$db = NULL;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	


}

///$vipt = (array_search($chistx, $r_adm, true) !== false);

}}

if ($x_stop_lp == 0 ) {
///ban ip range naprimer 111.222    iz    111.222.333.444   +++++  !range 111.222 WH
 if (strpos($msgr, ''.$ixz.'range') !== false){ 
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
//$vipt = (array_search($r_ch, $r_adm, true) !== false);

if ($web_con == '0'){ 
list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip); 
$ipt = (array_search($i1p.'.'.$i2p.'.'.$i3p, $r_admi, true) !== false);}
else if ($web_con == '1'){ 
 
////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
// list($nickr, $msgr) = explode(' % ', $parselinetxt);  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 		
    foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ip = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
   
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && ($a_grp == 111)); 
else
 $jjj = (($adm_ip == $i_ip) && ($kski[0] == $idnum) && ($a_grp == 111));
    if($jjj)
	      { 
		  
 list($x_cmd, $x_idn, $x_reason) = explode(' ', $msgr);   // !ban 5 Wh ( 5 = id  wh = reason)

 for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 


$i_namex = aaxa($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk); 
	
	
$dat = '.';
		$x_addr = explode(".", $i_ip); 	
	
	
	  if($x_addr[0].$dat.$x_addr[1] == $x_idn)
	     {

	$db2->exec("INSERT INTO x_ranges (ip_ranges,ip_info) VALUES ('$x_idn','$i_namex')");	 
	
	usleep($sleep_rcon);

if (($game_ac == '0') && ($x_stop_lp == 0 )){  
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason:^1" " Range "', '');
	usleep($sleep_rcon); 
	usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');

	AddToLog("[".$datetime."] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");    
	++$x_number;	
	++$x_stop_lp;
echo '  ban  '.substr((microtime(true) - $start),0,7);
   //return;
}
else { 
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason:^1" "Range "^6[^7BAN By Admin^6]""', '');
	usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7BAN By Admin^6]"', ''); }
	AddToLog("[".$datetime."] BANNED: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");    
	++$x_number;	
	
echo '  ban  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;
   //return;	
	}

}
}
}

$result = null;
$db = NULL;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	

}

///$vipt = (array_search($chistx, $r_adm, true) !== false);

}}
?>
 

