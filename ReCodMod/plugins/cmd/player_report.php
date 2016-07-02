<?php

if ($x_stop_lp == 0 ) {
if ((strpos($msgr, $ixz.'ban') !== false) || (strpos($msgr, $ixz.'kick') !== false) || (strpos($msgr, $ixz.'tban') !== false))
{echo '-';}else{
if ((strpos($msgr, $reportz) !== false) && ($x_number != 1) || (strpos($msgr, $che5) !== false))
    { 
if ((strpos($msgr, $che5." ") !== false)
  ||(strpos($msgr, $reportz." ") !== false))
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
else 
 $x_idn = '';
 
if ($x_idn=='')
{

 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);

  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
   	  
	  if(strpos($mmm, $nnn) !== false)
	     {		
	
if (strpos($msgr, $ixz) !== false)
{
if ((strpos($msgr, $reportz) !== false) || (strpos($msgr, $che5) !== false))
{	
if ((strpos($msgr, " ") !== false) || (strpos($msgr, "  ") !== false))
{	
echo '--'.$server_ip;
echo '--'.$server_port;
echo '--'.$nickr;
echo '--'.$i_ip;
echo '--';

$msgrn = str_replace(" ", "_", $msgr);
echo '--------->'.$msgrn;


if( $curl = curl_init() ) {
     curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/forum/mailll.php?emailz='.$admin_email.'&sended='.$nickr.';'.$msgrn. '&userip='.$i_ip.'&serverip='.$server_ip.':'.$server_port);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
   }
     
usleep($sleep_rcon);
rcon('say ^1Your message has been sent to Admin!', '');
}}
}
   
	$message = AddCheatHelp("[".$datetime."] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");    
	
++$x_number;
	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;	
		 }
 
}
else
{ 
 
$i_namex = afdasfawf($i_name);	
if($x_idn) 
	{

if (strpos($msgr, $ixz) !== false)
{
if ((strpos($msgr, $reportz) !== false) || (strpos($msgr, $che5) !== false))
{	
if ((strpos($msgr, ' ') !== false) || (strpos($msgr, '  ') !== false))
{
echo '--'.$server_ip;
echo '--'.$server_port;
echo '--'.$nickr;
echo '--'.$i_ip;
echo '--';

$msgrn = str_replace(" ", "_", $msgr);
$nickrn = str_replace(" ", "_", $nickr);
echo '--------->'.$msgrn;


if( $curl = curl_init() ) {
     curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/forum/mailll.php?emailz='.$admin_email.'&sended='.$nickrn.';'.$msgrn. '&userip='.$i_ip.'&serverip='.$server_ip.':'.$server_port);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
   }
     
usleep($sleep_rcon);
rcon('say ^1Your message has been sent to Admin!', '');
}


}

}
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;
	
	}

}

}
else if ((strpos($msgr, $che7) !== false) && ($x_number != 1) 
       ||(strpos($msgr, $chez2) !== false) && ($x_number != 1)
       ||(strpos($msgr, $chez1) !== false) && ($x_number != 1)
	   ||(strpos($msgr, $alarm1) !== false) && ($x_number != 1)
	   ||(strpos($msgr, $alarm2) !== false) && ($x_number != 1))
    {

usleep($sleep_rcon);
rcon('say ^6 ^1Do not panic, sent ^7'.$ixz.'report ^1with your problem message! ', '');
	
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
		
		
	}		
else if ((strpos($msgr, $che4) !== false) && ($x_number != 1))
    {

usleep($sleep_rcon);
rcon('say ^6 ^1Sent ^7'.$ixz.'support ^1with your question & in message add your e-mail! ', '');
	
 AddToLogInfo("[".$datetime."] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");    
	
	
	++$x_number;
	
echo '  '.substr((microtime(true) - $start),0,7);
   ++$x_stop_lp;    //return;		
		
		
	}	
        }
}
		 
?>
 

