<?php
if ($x_stop_lp == 0 ) {
if (strpos($msgr, ''.$ixz.'ulist') !== false)
    { 

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
	
 if(strpos($mmm, $nnn) !== false)
	     {
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
			  $newid = $i_id;
			  $newip2 = $i_ip;	
			  
			  
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
	
   foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];	
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  || ($adm_ip == $i_ipn) && ($a_grph == 3)
  || ($adm_ip == $i_ipn) && ($a_grph == 4)
  || ($adm_ip == $i_ipn) && ($a_grph == 5)
  || ($adm_ip == $i_ipn) && ($a_grph == 6)
  || ($adm_ip == $i_ipn) && ($a_grph == 7)
  || ($adm_ip == $i_ipn) && ($a_grph == 8))
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
$colorb=$i%2>0? '^6':'^2';
$colora=$i%2>0? '^7':'^7';

require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

////////////////////////////////////////////////////////////////////////////////////////////////////

try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////

    $result = $db2->query("SELECT * FROM amnistia WHERE id>=1 ORDER BY (id+0) DESC LIMIT 10");

	$number = 0;	
	   foreach($result as $row)
    { 
	    $playername = 	$row['playername1'];
		$ipm = 			$row['id'];
		$rshs = 		$row['reason1'];
		
	usleep($sleep_rcon);
if ($game_patch == 'cod1_1.1')
    rcon('say ^6 '.$colorb.'#Id:'.$colorb.' '.$colora.$ipm.' '.$colorb.' Nick: '.$colorb. $colora .$playername.' ^3Reason: '.$colorb. $colora .$rshs. '"', '');
 else 
rcon('tell '. $newid .' ^6 '.$colorb.'#Id:'.$colorb.' '.$colora.$ipm.' '.$colorb.' Nick: '.$colorb. $colora .$playername.' ^3Reason: '.$colorb. $colora .$rshs. '"', '');

}	
	++$x_number;	
	AddToLogInfo("[".$datetime."] UN-BANLIST-10: (" . $x_nickx . ") (" . $msgr . ") reason: LIST"); 

++$x_stop_lp;
echo '  '.substr((microtime(true) - $start),0,7);
   
 $result = null;
$db2 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	  
   
   
   return;	
   
   
   
   

                    					
	}}}}

?>
 
