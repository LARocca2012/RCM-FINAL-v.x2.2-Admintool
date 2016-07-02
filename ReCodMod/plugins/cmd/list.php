<?php
if ($x_stop_lp == 0 ) {
 
   if (strpos($msgr, ''.$ixz.'list') !== false)
    { 	
 
 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
 echo  $mmm = substr(trim($x_nickx), 0, 2);
 echo  $nnn = substr(trim($x_namex), 0, 2);
 
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
    if($jjj){
 
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
			  $newid = $i_id;
			  $newip2 = $i_ip;
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
 
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$newip2' ");
 		
    foreach($result as $row)
    { 	
	
 echo ' '.  $adm_ip  = $row['s_adm'];
 echo ' '.  $a_grph  = $row['s_group'];
 
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);   
  if(($adm_ip == $i_ipn) && (($a_grph == 0) || ($a_grph == 111) || ($a_grph == 555)))
	      { 	
		  
		echo '---'.$i_namex.'---';
		
++$x_number;		
		 }
	}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	
	
	
	
}
	
if ($x_number > 0){
usleep($sleep_rcon);		 	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
$colorb=$i%2>0? '^6':'^3';
$colora=$i%2>0? '^7':'^7';
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////////////////
//include("geoip_bases/MaxMD/geoipcity.inc");       
//include("geoip_bases/MaxMD/geoipregionvars.php");
if((empty($i_ip)) 
	|| (strpos($i_ip, '192.168') !== false)
    || (strpos($i_ip, '255.255') !== false)
	|| (strpos($i_ip, 'localhost') !== false)
	|| (strpos($i_ip, '127.0.0.1') !== false)
	)
$i_ip = '37.120.56.200';
	
$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$i_ip);
$xxxnw = ($record->country_name . ", ".$record->city."");
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
 
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 		
    foreach($result as $row)
    {	
 		
$statuszl  = $row['s_group'];
}
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if(empty($statuszl))
$statuszl = '^9Player';
if(!$stat)
{
	$statuszl = '^2Player';}
else if ($statuszl == 0){$statuszl = '^1Admin';}
else if ($statuszl == 111){$statuszl = '^1Developer';}
else if ($statuszl == 555){$statuszl = '^6Moderator';}
else if ($statuszl == 1){$statuszl = '^7Clan member';}
else if ($statuszl == 2){$statuszl = '^3VIP';}
else if ($statuszl == 3){$statuszl = '^2Registered';}
else if ($statuszl == 4){$statuszl = '^4PRO';}
else if ($statuszl == 5){$statuszl = '^5Special guest';}
/*   Groups 
Admins - 0
Clan members - 1
Vip - 2
Members - 3 (Gamers on website)
Pro player - 4
Special guests - 5
Top player - 6
Noob - 7
Worst - 8
*/
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
	
if(!empty($chistx)){
if (!preg_match("/^bot\d+$/",  $chistx, $tmp2n))
{	
	usleep($sleep_rcon);	
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam')){	
rcon('say ^6 '.$colorb.'#Id:'.$colorb.'  '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex.' '.$colorb.'Status: ^4('.$statuszl.'^4) '.$colorb.' Ip: '. $colora .substr($i_ip, 0, 7).'** "'.$colorb.' From: ^4(^2'.$xxxnw.'^4)"', '');	
   //echo $i_namex. ' "^2from:^3 '.ciity($country_name['country']['iso']." , ".$country_name['city']['name_en']);	
	}else{
rcon('tell '. $newid .' ^6 '.$colorb.'#Id:'.$colorb.'  '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex.' '.$colorb.'Status: ^9('.$statuszl.') '.$colorb.' Ip: '. $colora .$i_ip.' "'.$colorb.' From: ^9(^2'.$xxxnw.'^9)"', '');	
   //echo $i_namex. ' "^2from:^3 '.ciity($country_name['country']['iso']." , ".$country_name['city']['name_en']);		
}	
}
}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	
	
	
	}
	AddToLogInfo("[".$datetime."] GEO: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
}
} 
	}		 
?>
 
