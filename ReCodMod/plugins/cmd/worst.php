<?php	
if ((strpos($msgr, $ixz.'worst') !== false) && ($x_number != 1))
    { 

 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY (s_skill+0) ASC LIMIT 5");
 	$number1 = 0;	
    foreach($result as $row)
    { 
		
	    $playername = 	$row['s_player'];
		$ipm = 			$row['s_skill'];
	usleep($sleep_rcon);
	rcon("say  ^6 ^3    [^6 " . ++$number1 . " ^3] ^7 ".$playername."^1 Skill Rank: ^2 ".$ipm."", "");
	}
	++$x_number;
	AddToLogInfo("[".$datetime."] TOP: (" . $x_namex . ") (" . $i_id . ") reason: TOP"); 
 
echo '    '.(microtime(true) - $start);

++$x_number;
++$x_return;

$result = null;
$db3 = NULL;
  
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
  
	}
?>
 
