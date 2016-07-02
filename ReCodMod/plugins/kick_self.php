<?php
  if ($x_number == 0)
    { 	 
     if ($nickr == $i_name)
		{	  
	  usleep($sleep_rcon);  
rcon('clientkick '.$i_id.'', ''); 
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> /KICK SELF! </font> ");  		  
	//AddToLogInfo("[".$datetime."] QUESTION: " . $i_ip . " (" . $nickr . ") (" . $msgr . ") reason: Q");    
	++$x_number;
        }
	}	     
?>
 