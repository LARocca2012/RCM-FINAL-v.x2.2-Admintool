<?php
if ($x_stop_lp == 0 ) {
if (strpos($msgr, $ixz.'id') !== false)
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
 $sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
$result = $db->query($sql);  
   foreach($result as $row)
    {	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adm_ip == $i_ipn) && ($a_grph == 0)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
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
	
if ($x_number == 1){
usleep($sleep_rcon);		 	
require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
$colorb=$i%2>0? '^6':'^3';
$colora=$i%2>0? '^7':'^7';

require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

////////////////////////////////////////////////////////////////////////////////////////////////////
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
	usleep($sleep_rcon);
	rcon('tell '. $newid .' ^6 '.$colorb.'#Id:'.$colorb.' '.$colora.$i_id.' '.$colorb.' Nick: '.$colorb. $colora .$i_namex. '"', '');		
	}
	AddToLogInfo("[".$datetime."] ID: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
}
                    					
	}


}
		 
?>
 
	 

 
