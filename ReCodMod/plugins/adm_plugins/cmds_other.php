<?php	
if ($web_con == '0'){ 
list($i1p, $i2p, $i3p, $i4p) = explode('.', $i_ip); 
$ipt = (array_search($i1p.'.'.$i2p.'.'.$i3p, $r_admi, true) !== false);
require 'plug/admin_cmds.php';	
}
else if ($web_con == '1') {
 
require 'plug/admin_cmds.php';	
	}
?>
 
