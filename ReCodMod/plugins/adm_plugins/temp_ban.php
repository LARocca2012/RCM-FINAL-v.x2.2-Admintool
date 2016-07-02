<?php
if ($x_stop_lp == 0 ) {
if (strpos($msgr, $ixz.'tban ') !== false){ 
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
//$vipt = (array_search($r_ch, $r_adm, true) !== false);

if ($web_con == '0'){ 
list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip); 
$ipt = (array_search($i1p.'.'.$i2p.'.'.$i3p, $r_admi, true) !== false);}
else if (($web_con == '1') && ($x_stop_lp == 0 )){ 


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
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))); 
else
 $jjj = (($adm_ip == $i_ip) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)));
    if($jjj)
	      { 		  
		  
 list($x_cmd, $x_idn, $x_r_minutes) = explode(' ', $msgr);   // !tban 5 30  ( 5 = id  30 = times in minutes)
 
  if ($x_r_minutes=='')
$x_r_minutes = '5';

 //$x_x_minutes = ''.$x_r_minutes.'.minute(-s)';
 $datetimex = date('YmdHis');
 $x_n_minutes = $x_r_minutes * 60;
 $x_x_m = $datetimex + $x_n_minutes;
 
 for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 


$i_namex = aaxa($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk); 
	  if($x_bann[0] == $x_idn)
	     {	 
	 
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_x_m','$datetime','$x_nickx','$game_patch')");	
	usleep($sleep_rcon);

if (($game_ac == '0') && ($x_stop_lp == 0 )){ rcon('clientkick '. $i_id, '');
++$x_stop_lp;}
else { 
	rcon('say  ^6 ' . $chistx . ' '.$ban_ip_all.' "^7Reason: ^1tempban" "'.$x_r_minutes.'" minute(-s)', '');
	usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7TempBan^6]"', ''); ++$x_stop_lp;}
	AddToLog("[".$datetime."] Tempban: " . $i_ip . " (" . $i_namex . ") (" . $i_id . ") BY: (" . $x_nickx . ")  R ");  
    AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> ". $i_namex." Ban  Reason:^1 Tempban ".$x_r_minutes. " ");		
	++$x_number;	
	
echo '  tempban  '.substr((microtime(true) - $start),0,7);
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
 //return;	
}}
?>
 
