<?php
if (strpos($msgr,''.$ixz.'register') !== false)
    { 	
  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
$na1 = trim($kski[1]);
$na2 = trim($x_nickx);
	 if($na1 == $na2) 
	     {
	
try
  {
    $db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
 

   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
					
					
usleep($sleep_rcon);
rcon('tell '.$i_id.' ^6 ^3You already registered in RCM system!', ''); ++$x_stop_lp;	
						
					}else{
usleep($sleep_rcon);
rcon('say ^6 ^3Crangulations ^7'.$chistx.' ^3you in ^2Member group, ^3thanks for registering!', '');	
				
	$date = date('Y.m.d H.i.s');					
if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '3', 'no')") > 0) {
echo "Created IN DATABASE.". "\n"; ++$x_stop_lp;						
						
					}
					}
    
	
	
	
$sql = null;
$db = NULL;
$stat = null;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }		
	
}	
 
}
}	

?>
 
