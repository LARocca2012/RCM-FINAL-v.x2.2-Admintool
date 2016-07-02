<?php
////$r_ch = trim($chistx);
//$vipt = (array_search($chistx, $r_adm, true) !== false);

 ////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
// list($nickr, $msgr) = explode(' % ', $parselinetxt);  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
	
	
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 		
    foreach($result as $row)
    { 
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
 $adm_ipv = trim($adm_ip);
 $i_ipo = trim($i_ip);
 $kskig = trim($kski[1]);
 $nickr = trim($nickr);  

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kskig) !== false) && ($adm_ipv == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))); 
else
 $jjj = (($adm_ipv == $i_ipo) && ($kskig == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      { 
usleep($sleep_rcon);		  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<1; $i++) 
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

	
 list($x_cmd, $x_mapname) = explode(' ', $msgr);   // !map carentan 
$i_namex = aaxa($i_name);	


$x_mpt = mpt($x_mapname);
if ($x_mpt == 'wawa_3dAim')
{
usleep($sleep_rcon);
rcon('set g_gametype '.$mapfix.'', '');
}


usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/sv_mapRotation.php';
fclose($connx);

if (preg_match("/$x_mapname/i", $maps)) {

if ($x_number == 0){
    usleep($sleep_rcon);
    rcon('say ^6 ^3Admin changed map to '.$x_mapname, '');
	
	sleep(1);
 rcon('map  mp_'.$x_mapname.'', '');

  
AddToLog("[".$datetime."] MAP CHANGE: (" . $i_ipo . ")  (" . $i_id . ") BY: (" . $x_nickx . ") ");    
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> Admin changed map to ".$x_mapname. " ");
++$x_number;
++$x_return;
exit;
	}else{
++$x_number;
++$x_return;
exit;	
	}	 	
		
	///////++$x_number;	
		
}else{
echo "  False map";
 
usleep($sleep_rcon);
rcon('say ^1False Map! ^2Only: ^7'.$maps.'', '');
++$x_number;	
++$x_return;
exit;
     }		
   
//}   
  } 
    } 
      }
	  
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
echo 'Unknown map plugin error!';
  }	  
   
?>
 
