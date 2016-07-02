<?php
$x_admin = 0;

//$vipt = (array_search($chistx, $r_adm, true) !== false);
while ($row = sqlite_fetch_array($sql))
	{	
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);  
 

  if(($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)))
   {
///admin is online
//$vv = $adm_ip;
//echo '      admin CHAT='.$vv; 


if ($game_ac == '0'){

                    }
                    else 
					{				
//usleep($sleep_rcon);
//rcon('say ^6 ^2Admin ^6[^7'.$i_name.'^6] ^2online', '');					
					}      
	        $x_admin = 1;
	}	
}		  

  if($x_admin == 0)
	      {	
		  
$msgr = matmat($msgr);
$damytext = delxxxc($mytext); 

if ($game_patch == 'cod1 1.1')
list($ccbc, $nivv, $msgr) = explode('; ', $mytext);
else
list($nivv, $msgr) = explode(' % ', $damytext);

	  
$msgrn = substr($msgr, 0, 3);

$x_n3 = trim(clearnamex($i_name));
$x_n4 = trim(clearnamex($nivv));

$now_is=date('YmdHis');
$fhrf=file($log_cash."/temp-d.txt");
foreach ($fhrf as $flvr) {
$flmm=explode("%",$flvr);
$res3x=$now_is-$flmm[1];
}
$fhrz=file($log_cash."/temp-c.txt");
foreach ($fhrz as $flix) {
$flmz=explode("%",$flix);
$res2x=$now_is-$flmz[1];
}
$fhr=file($log_cash."/temp-b.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$res1x=$now_is-$flmc[1];
}
$fh=file($log_cash."/temp-a.txt");
foreach ($fh as $fline) {
$flm=explode("%",$fline);
$res=$now_is-$flm[1];


  if (($flm[0]==$x_n3 && $flm[0]==$x_n4 and $resx<=$flood_time 
  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmz[2]==$msgrn and $res2x<=$flood_time_cmd2) && ($x_number != 1))
//  if (($flm[0]==$x_n3 && $flm[0]==$x_n4 and $resx<=$flood_time 
//  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && substr($flmz[2], 0, 8)==substr($msgrn, 0, 8) and $res2x<=$flood_time_cmd) && ($x_number != 1))
{ echo " FLUD "; 
usleep($sleep_rcon);
rcon('say  ^6  '. $chistx . ' "^6[^7Stop chat flooding or BAN!^6] ^1RCM '.$z_ver.' Autokicker"', '');
AddToLog("[".$datetime."] CHAT FLOODER WARN : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Warning by RCM '.$z_ver.' = Chat Flood]</font> ");

$x_n4 = trim(clearnamex($nivv)); 	
$today=date('YmdHis');
$fh=fopen($log_cash."/temp-b.txt" ,"w+");
fwrite($fh, $x_n4.'%'.$today);
fclose($fh);

$fh=fopen($log_cash."/temp-d.txt" ,"w+");
fwrite($fh, $x_n4.'%'.$today.'%'.$msgrn);
fclose($fh);
 

  if (($flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmc[0]==$x_n3 and $resx<=$flood_time
  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmm[2]==$msgrn and $res2x<=$flood_time_cmd2) && ($x_number != 1))  
// if (($flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmc[0]==$x_n3 and $resx<=$flood_time
//  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && substr($flmm[2], 0, 8)==substr($msgrn, 0, 8) and $res2x<=$flood_time_cmd) && ($x_number != 1))  
{ echo " FLUD "; 
//rcon('say  ^6  '. $chistx . ' "^1Flooding ^6[^7Stop chat flooding!^6]"', '');
 
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('clientkick '. $i_id, '');
AddToLog("[".$datetime."] CHAT FLOODER : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Chat Flood]</font> ");
 
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOOD	
	 
$c0 = sqlite_query($db4, "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1"); 
	while ($row = sqlite_fetch_array($c0))
	{
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wflood))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('say  ^6  '. $chistx . ' "^1Flooding ^6[^7Banned by RCM '.$z_ver.' Autokicker = Chat Flood^6]"', ''); 
 
sqlite_query($db4, "UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'"); 
usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - CHAT FLOOD!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Flood';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$banbb = sqlite_query($db2, "INSERT INTO bans (playername,ip,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','$x_reason','$datetime','$x_nickx','$game_patch')"); // запрос к первому серверу
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOO

}
else { 
usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7Kicked by RCM '.$z_ver.' Autokicker = Chat Flood^6]"', '');} 
AddToLog("[".$datetime."] CHAT FLOODER : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Chat Flood]</font> ");

/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOOD	
	 
$c0 = sqlite_query($db4, "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1"); 
	while ($row = sqlite_fetch_array($c0))
	{
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wflood))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('say  ^6  '. $chistx . ' "^1Flooding ^6[^7Banned by RCM '.$z_ver.' Autokicker = Chat Flood^6]"', ''); 
 
sqlite_query($db4, "UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'"); 
usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - CHAT FLOOD!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Flood';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$banbb = sqlite_query($db2, "INSERT INTO bans (playername,ip,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','$x_reason','$datetime','$x_nickx','$game_patch')"); // запрос к первому серверу
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOO

}
 
  ++$x_number;
}
}


			 
 }

 
 
 $x_admin = 0;

?>
 
