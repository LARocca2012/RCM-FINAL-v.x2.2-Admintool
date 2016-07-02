<?php	
if ($x_stop_lp == 0 ) {
if ((strpos($msgr, $mapvote) !== false) || ($msgr == $cmdyes) || ($msgr == $cmdyes.$cmdyes))
{
  echo "\n[cmk-x] : [",$datetime, "] : ".$nickr." : ".$msgr;   
//*//	
	$xtee = date("dmYHis");
  $checkmm = sqlite_query($db, "SELECT * FROM x_cmd_kck");  
 while ($row = sqlite_fetch_array($checkmm))
 {
$xbm = $row['z_time'];	 
$xbb = $row['z_counts'];	
 }
 $razn = $xtee - $xbm;

 if($razn > $v_time_map) 
  {
  VoteCashresetMap("null");
$fh=fopen($log_cash."/temp_mapvote.txt" ,"w+");
fwrite($fh, $nickr.'%null');
fclose($fh);  
  
  }
 
 //*///
$fd = fopen($rules_log_vote_map, "r");
$bufer = fread($fd, filesize($rules_log_vote_map));
fclose($fd);    
//СЂР°Р·Р±РёРІР°РµРј РІ РјР°СЃСЃРёРІ РїРѕ СЃС‚СЂРѕС‡РЅРѕ
$strtmp = explode("\n", $bufer); 
 //list($nickr, $msgr) = explode(' % ', $parselinetxt); 
$v = $nickr;
//$v = trim($v);
//РїСЂРѕРІРµСЂСЏРµРј РµСЃС‚СЊ Р»Рё РїСЂРѕРІРµСЂРѕС‡РЅРѕРµ СЃР»РѕРІРѕ РІ РјР°СЃСЃРёРІРµ
foreach($strtmp as $word) {
if($v == $word){
/*
require $cpath.'ReCodMod/w_functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/w_functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////RESTART
$x_namex = trim(clearnamex($i_name));
	  //usleep($sleep_rcon);
	   //	rcon('say ^6 ^3Voted!', '');
	}	
*/		
echo '  golosoval  '.(microtime(true) - $start);

 echo "" .$v. "\n";

//sqlite_close($db); sqlite_close($db2); sqlite_close($db3); sqlite_close($db4);	
 return;}
}


$vote_cgu = 0;		
$x_number = 0;	
require $cpath.'ReCodMod/w_functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/w_functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////RESTART
$x_namex = trim(clearnamex($i_name));
$x_nickx = trim(clearnamex($nickr));
$findgi3   = '!xmap ';
$posvok3 = strpos($msgr, $findgi3);
if (($posvok3 !== false) || ($msgr == $cmdyes) || ($msgr == $cmdyes.$cmdyes)) { 
   $xtee = date("dmYHis");
   
   //echo 'ye!';
   
 if (($msgr == $cmdyes) || ($msgr == $cmdyes.$cmdyes))
{
$fhr=file($log_cash."/temp_mapvote.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$idgz = $flmc[1];
}

} 
else
 list($x_cmd, $idgz) = explode(' ', $msgr);   // !RESTART 5 ( 5 = id)	
 
  if (strpos($msgr, $cmdyes)!== false)
{
$fhr=file($log_cash."/temp_mapvote.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$x_mapname = $flmc[1];
}

} 
else
 list($x_cmd, $x_mapname) = explode(' ', $msgr);   // !map carentan 
 
$x_mpt = mpt($x_mapname);
if($x_mpt == 'mp_harbor' || $x_mpt == 'mp_carentan' || $x_mpt == 'mp_logging_mill'
|| $x_mpt == '^5abbey'|| $x_mpt == 'mp_pavlov'|| $x_mpt == 'mp_hurtgen'
|| $x_mpt == 'mp_railyard'|| $x_mpt == 'mp_eisberg'|| $x_mpt == 'xp_standoff'
|| $x_mpt == 'mp_rocket'|| $x_mpt == 'mp_brecourt'|| $x_mpt == 'mp_chateau'
|| $x_mpt == 'mp_ship' || $x_mpt == 'mp_depot'|| $x_mpt == 'mp_powcamp' 
|| $x_mpt == 'wawa_3dAim' || $x_mpt == 'mp_westwall'
|| $x_mpt == 'mp_dawnville' || $x_mpt == 'x_valley' || $x_mpt == 'mp_burgundy'){
     echo '====='.$x_mpt;
	 $x_newmapz = $x_mpt;
}else { $x_newmapz = '^1False Map!';   } 

 $inamex = afdasfawf($i_name);	
  $oo = $i_id . ' / ' . $inamex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_kk = explode(" / ", $oo); 	  
 $checkmm = sqlite_query($db, "SELECT * FROM x_cmd_kck");  
 while ($row = sqlite_fetch_array($checkmm))
 {
$xbm = $row['z_time'];	 
echo 'vvvvvvvvvvvvvv '.$xbb = $row['z_counts'];	
 }
	  
if($x_votg == 0)
	     {	
$votm = "";
$razn = $xtee - $xbm;
///////////////////////////////////////////VOTE
if($player_cnt == 0)
$plggx = 1;
else if($player_cnt == 1)
$plggx = 1;
else if($player_cnt == 2)
$plggx = 2;
else if($player_cnt == 3)
$plggx = 2;
else if($player_cnt == 5)
$plggx = 3;
else if($player_cnt == 6)
$plggx = 4;
else if($player_cnt == 7)
$plggx = 4;
else if($player_cnt == 8)
$plggx = 5;
else if($player_cnt == 9)
$plggx = 5;
else if($player_cnt == 10)
$plggx = 6;
else if($player_cnt == 11)
$plggx = 6;
else if($player_cnt == 12)
$plggx = 7;
else if($player_cnt == 13)
$plggx = 7;
else if($player_cnt == 14)
$plggx = 7;
else if($player_cnt == 15)
$plggx = 8;
else if($player_cnt >= 16)
$plggx = round($player_cnt/2);

if(($razn < $v_time_map) && (strpos($msgr,'!xmap ') !== false)) 
  {  
  
  $xcnnn = 0;	
  $xtee = date("dmYHis");
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts='$xcnnn',z_time='$xtee'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote reset. Dont use !xmap command in vote time!', '');

$fh=fopen($log_cash."/temp_mapvote.txt" ,"w+");
$hg12 = '----.';
fwrite($fh, $hg12.'%'.$hg12);
fclose($fh); 
  
VoteCashresetMap("null"); 
++$x_stop_lp;    //return;
  }
  
  if ($x_newmapz == '^1False Map!')
  {
 usleep($sleep_rcon); 

 if (($msgr == $cmdyes) || ($msgr == "++") || ($msgr == "+++")){
  rcon('say ^6 ^2Vote time is over, get starting vote with ^7!xmap ^2command!', '');
 }else{
  rcon('say ^6 '. $votm . '"'.$x_newmapz.'" - ^1Map^3 Dosnt Exist!!!', '');	
}





  
  }else{


if(($razn < $v_time_map) && ($xbb < $plggx)) 
  {
    $razn = $xtee - $xbm;
  $razn2 = ($v_time_map - $razn); 
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts=z_counts +1");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote: ^7"'.$cmdyes.'" ^2for ^7 '.$idgz.'"^1Map^5  ^8Seconds Left:^3 '.$razn2.'', '');	 
VoteCashMap("".$nickr."");	
  }
      else if(($razn < $v_time_map) && ($xbb >= $plggx))   
  { 
    usleep($sleep_rcon*5);
    rcon('say ^6 ^3Vote completed!', '');
    usleep($sleep_rcon*5);
    rcon('say ^6 ^3Players changed map to '.$x_newmapz, '');
		
if ($x_mpt == 'wawa_3dAim')
{
usleep($sleep_rcon);
rcon('set g_gametype '.$mapfix.'', '');
}	sleep(1);	
    rcon('map '. $x_newmapz, '');
	
		AddToLog1("[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ^3Players changed map to $x_newmapz</font> "); 
	AddToLog("[".$datetime."] MAPVOTE: " . $i_ip . " (" . $x_namex . ") (" . $i_id . ") BY: (" . $x_namex . ")  R ");    
  $xcnnn = 0;
  $xtee = date("dmYHis");
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts='$xcnnn',z_time='$xtee'");
VoteCashresetMap("".$nickr."");
	++$x_number; 	 
  }
      else if($razn > $v_time_map) 
  {
  
  
$fh=fopen($log_cash."/temp_mapvote.txt" ,"w+");
fwrite($fh, $nickr.'%'.$idgz);
fclose($fh);  
  
  $xcnnn = 0;	
  $xtee = date("dmYHis");
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts='$xcnnn',z_time='$xtee'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote Activated!: ^7!xmap '.$idgz.'"^1<- Vote with ^7"'.$cmdyes.'"^2 or ^7'.$cmdnoo.' ^2for change to ^3'.$idgz.'', '');

if(1 == $plggx) 
  {
    usleep($sleep_rcon);
    rcon('say ^6 ^3You not alone with console, you changed map!', '');
    usleep($sleep_rcon*5); 
    rcon('say ^6 ^3You changed map to '.$x_newmapz, '');
    usleep($sleep_rcon*7); 
if ($x_mpt == 'wawa_3dAim')
{
usleep($sleep_rcon);
rcon('set g_gametype '.$mapfix.'', '');
}	sleep(1);	
    rcon('map '. $x_newmapz, '');



}
 
VoteCashresetMap("".$nickr.""); //VoteCashreset("".$nickr."");


  }


  }
	
++$x_votg;	
	}
} 
/////////////////////////////////////////////////////////////////////////////////KICK 
  }   ///end loop
//fclose($connect);
//fclose($fpX);

	
echo '    '.(microtime(true) - $start);
++$x_stop_lp;    //return;
}
}
?>
 
