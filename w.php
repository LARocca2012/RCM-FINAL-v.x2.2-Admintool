#!/bin/php
<?php
/*/ ///******************  |||           \\\	
/*/ ///******************  |||         ///\ROCCA 
/*/ ///******************  |||        ///  \\\ (c) http://recod.ru/
/*/ ///******************  |||       ///    \\\
/*/ ///******************  |||      ///\\\*RecodMod V.15.0
/*/ ///******************  ||||||| ///        \\\          skype: larocca2012
/*/ ///******************/ 

$spps = 221000;
usleep(7000);

function hx($sc)
{
    $sc = str_replace(array(
        "w.php"
    ), '', $sc);
    return $sc . "";
}
$x_ff = 0;
$cpath = hx(__FILE__);
/* - Load configurations - */
require $cpath . 'ReCodMod/functions/_c.php';
/* - Load functions - */
require $cpath . 'ReCodMod/functions/inc_functions.php';
/* - Load functions - */
include($cpath . "ReCodMod/functions/functions.php");
/* - GEO - */
include($cpath . "ReCodMod/geoip_bases/MaxMD/geoipcity.inc");

if(file_exists($log_folder.'/g_log.log')){																						
$fy = file($log_folder.'/g_log.log');
foreach ($fy as $parseglog) { $mplogfiler = $parseglog; }}

if (strpos($mplogfiler, $mplogfile) != false){
echo "\n YOU USE WRONG LOGFILE IN cfg/all_connection.php \n LINE WITH mplogfile - \n\n CHANGE \n".$mplogfiler." \n TO \n".$mplogfile." \n FOR RCM WORKING!!! \n \n \n";
sleep (130); exit;}

echo "\n /-/ ".$z_set." /-/ ready to work /-/ \n";
while (true) {
  usleep(1000);  
    $start = microtime(true);
    $stime = time();
    $erroor = 0;
    $confirm_user = 0;
    $x_commandz   = 0;
    $x_votg       = 0;
    $x_votg3      = 0;
    $x_number     = 0;
    $x_numberz    = 0;
    $x_pl_log     = 0;
    $x_numb1      = 0;
    $x_return     = 0;
    $x_admin      = 0;
    $x_admin1     = 0;
    $x_admin2     = 0;
    $x_admin3     = 0;
    $x_kik        = 0;
    $x_loops      = 0;
    $x_loopsv     = 0;
    $x_adminxxx   = 0;
    $x_looops     = 0;
    $x_nmbr       = 0;
    $x_nmbrf      = 0;
    $bck          = 0;
    $bck2         = 0;
    $stop_lp    = 0;
    $x_stop_lp    = 0;
    $x_stop_lpst  = 0;
    $fakerz       = 0;
    $xz_flud      = false;
    
    if ($bck != 1) {
        $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_kicker"); 
        if ($stime - $cron_time >= 10) {
            usleep($sleep_rcon);
            $bck = 1;
            //echo '--- cron_time left ' . $ddddd = $stime - $cron_time. ' seconds.';
            @file_put_contents($cpath . "ReCodMod/x_cron/cron_time_kicker", "");   
            require $cpath . 'ReCodMod/functions/inc_functions2X.php';
            for ($i = 0; $i < $player_cnt; $i++) {
                require $cpath . 'ReCodMod/functions/inc_functions3x.php';
                $i_id   = 0;
                $i_ping = 0;
                if ($player_cnt <= 1)
                    $spps = 721000;
                else if ($player_cnt <= 4)
                    $spps = 195000;
                else if ($player_cnt <= 6)
                    $spps = 160000;
                else if ($player_cnt <= 14)
                    $spps = 120000;
                else if ($player_cnt <= 20)
                    $spps = 100000;
                else if ($player_cnt <= 30)
                    $spps = 90000;
                else if ($player_cnt <= 40)
                    $spps = 80000;
                else if ($player_cnt <= 50)
                    $spps = 70000;
                else if ($player_cnt <= 64)
                    $spps = 50000;
                else if ($player_cnt <= 128)
                    $spps = 40000;
                  
                $bck = 1;
                if (($spps != 721000) && ($x_numberz == 0)) {
                    require $cpath . 'ReCodMod/plugins/ban_fast_kick.php';
					++$x_numberz;
                    $bck = 1;
                }
            }
        }    
    }
    
    usleep($spps);

    if ($bck2 == 0) {
        if ($spps != 721000) {
          if ($spps != 221000) {  
            if (empty($player_cnt)) {
                $player_cnt = 2;
            }
 
            if ($player_cnt < 2)
                $msgt = 120;           
            else if ($player_cnt < 5)
                $msgt = 30;
            else if ($player_cnt < 10)
                $msgt = 40;
            else if ($player_cnt < 14)
                $msgt = 45;
            else if ($player_cnt < 16)
                $msgt = 50;
            else
                $msgt = 60;
            //////////////SERVER MESSAGES
            $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_message");
            if ($stime - $cron_time >= $msgt) {
                file_put_contents($cpath . "ReCodMod/x_cron/cron_time_message", "");
                require $cpath . 'ReCodMod/functions/inc_functions2.php';
                for ($i = 0; $i < 1; $i++) {
                    echo ' - '.$spps.' - ';
require $cpath . 'ReCodMod/plugins/messages.php';
             
				if ($code == 1) 
				{			
				
$date = date('Y.m.d H.i.s');

$cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_code");
                        if ($stime - $cron_time >= 60) {
 file_put_contents($cpath . "ReCodMod/x_cron/cron_time_code", "");  
 
$f = fopen($cpath."ReCodMod/x_logs/parsed_code.log", "wb");
$file = file_get_contents($codecon); 
fwrite($f, $file);
fclose($f);

         $fh = file($cpath."ReCodMod/x_logs/parsed_code.log");
                        foreach ($fh as $parsexrcm) {

if (preg_match("/admin/i", $admin_code1)){ 

	if ($admin_code1 != "xadmin")
{	
	
$pwrcm = md5(md5($admin_code));

echo '--->'.$parsexrcm;
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
	$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
	//$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='0' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '0', '$pwrcm')") > 0) {
echo "Created ADMIN CODE IN DATABASE.". "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
	} 

}

}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////		

if (preg_match("/moderator/i", $moderator_code1)){ 
	if ($moderator_code1 != "xmoderator")
{
$parsexrcm = trim(readloglinercx($cpath.'ReCodMod/x_logs/parsed_code.log'));
$pwrcm = md5(md5($moderator_code));
if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
	$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
	//$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='md' WHERE s_adm='$ipg'");
      echo "Created moderator CODE IN DATABASE.". "\n";  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', 'md', '$pwrcm')") > 0) {
echo 'Inserted in database' . "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
	}
}}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////			

if (preg_match("/specialguests/i", $specialguests_code1)){	
	if ($specialguests_code1 != "xspecialguests")
{
$pwrcm = md5(md5($specialguests_code));
$parsexrcm = trim(readloglinercx($cpath.'ReCodMod/x_logs/parsed_code.log'));

if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
	$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
	//$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='5' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '5', '$pwrcm')") > 0) {
echo "Created SPECIAL GUEST CODE IN DATABASE.". "\n";
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
	} 
}}	
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////			

if (!empty($vip_code1) && (preg_match("/vip/i", $vip_code1))){	
	if ($vip_code1 != "xvip")
{
$pwrcm = md5(md5($vip_code));
$parsexrcm = trim(readloglinercx($cpath.'ReCodMod/x_logs/parsed_code.log'));

if (preg_match("/$pwrcm/i", $parsexrcm)) {
   list($ipg, $pwrrr) = explode('/', $parsexrcm);
try
  {
	$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
	//$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='2' WHERE s_adm='$ipg'");
      echo '-Created-';  
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/	  
	  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '2', '$pwrcm')") > 0) {
echo "Created VIP CODE IN DATABASE.". "\n"; 
/*	  
$handlePos=fopen($cpath . "ReCodMod/x_cache/pos2.txt" ,"w+");
fwrite($handlePos, "1");
fclose($handlePos); 
*/ 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
	}
}}		
	
}

}				

				}
else{
	
if ($guids == 0) {					
					//////////////SIMPLE PLAYERS AND ADMINS LOGIN SYSTEM FROM WEBSITE LOGFILE =START
                    $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_resttt2");
                    if ($stime - $cron_time >= 5) {
                        file_put_contents($cpath . "ReCodMod/x_cron/cron_time_resttt2", "");
                        
             $fh = file("/media/DataBase/Game_Servers/RCM/CONNECT/LOG_logged_from_forum.txt");
                        foreach ($fh as $fline) {
                            $flm = explode(" - ", $fline);
                            
                            echo $ipg = $flm[1];
                            echo $groupg = $flm[2];
                            $date = date('Y.m.d H.i.s');					
try
  {
	$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
	$db->exec("DELETE FROM x_db_admins WHERE s_adm='$ipg'");
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$ipg' LIMIT 1";
 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
   $db->exec("UPDATE x_db_admins SET s_group='$groupg' WHERE s_adm='$ipg'");
      echo '-Created-';  }
  else {
 if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$ipg', '$date', '$groupg', '$groupg')") > 0) {
echo 'Inserted in database' . "\n"; 
}
}
$res = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
		 }
                    $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_resttt");
                        if ($stime - $cron_time >= 3800) {
                            file_put_contents($cpath . "ReCodMod/x_cron/cron_time_resttt", "");
                            
                            $fhc  = fopen("/media/DataBase/Game_Servers/RCM/CONNECT/LOG_logged_from_forum.txt", "w+");
                            $hhhe = '.  -  .  -  .';
                            fwrite($fhc, $hhhe . "\n");
                            fclose($fhc);
                        }
                    } //////////////SIMPLE PLAYERS AND ADMINS LOGIN SYSTEM FROM WEBSITE LOGFILE  =END
				}
				else if ($guids == 1) 
				{
/*			
dHJ5DQogIHsNCiAgICAkZGIgPSBuZXcgUERPKCdzcWxpdGU6Jy4kY3BhdGggLiAnUmVDb2RNb2QvZGF0YWJhc2VzL2RiMS5zcWxpdGUnKTsNCgkkZGItPmV4ZWMoIkRFTEVURSBGUk9NIHhfZGJfYWRtaW5zIFdIRVJFIHNfYWRtPSckaXBnJyIpOw0KJHNxbCA9ICJTRUxFQ1QgKiBGUk9NIHhfZGJfYWRtaW5zIFdIRVJFIHNfYWRtPSckaXBnJyBMSU1JVCAxIjsNCmlmICgkcmVzID0gJGRiLT5xdWVyeSgkc3FsKSkgew0KIGlmICgkcmVzLT5mZXRjaENvbHVtbigpID4gMCkgew0KICAgJGRiLT5leGVjKCJVUERBVEUgeF9kYl9hZG1pbnMgU0VUIHNfZ3JvdXA9JyRncm91cGcnIFdIRVJFIHNfYWRtPSckaXBnJyIpOw0KICAgICAgZWNobyAnLUNyZWF0ZWQtJzsgIH19DQogIGVsc2Ugew0KIGlmICgkZGItPmV4ZWMoIklOU0VSVCBJTlRPIHhfZGJfYWRtaW5zIChzX2FkbSwgc19kYXQsIHNfZ3JvdXAsIHNfZ3VpZCkgVkFMVUVTICgnJGlwZycsICckZGF0ZScsICckZ3JvdXBnJywgJyRncm91cGcnKSIpID4gMCkgew0KZWNobyAnSW5zZXJ0ZWQgaW4gZGF0YWJhc2UnIC4gIlxuIjsgDQp9DQp9DQokcmVzID0gbnVsbDsNCiRkYiA9IE5VTEw7DQogIH0NCiAgY2F0Y2goUERPRXhjZXB0aW9uICRlKQ0KICB7DQogICAgcHJpbnQgJ0V4Y2VwdGlvbiA6ICcuJGUtPmdldE1lc3NhZ2UoKTsNCiAgfQkJCQ0KJGFkbWlucyAgICAgICAgID0gYXJyYXkoJzU2NzQzMjE0LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJG1vZGVyYXRvcnMgICAgID0gYXJyYXkoJzMyNTIzNDEzLCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJHNwZWNpYWxfZ3Vlc3RzID0gYXJyYXkoJzEyNTQyMzU1LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJHZpcF91c2VycyAgICAgID0gYXJyYXkoJzM0NjU2MjE0LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7DQokY2xhbl9tZW1iZXJzICAgPSBhcnJheSgnNTY3NzI3NDcsIDE4NTYzZDY2OTVjMzIxZjgxMDBjNmY5MThiNDNkODM3Zjc0LCAyMzUzNDYzNTYnKTsg																			
*/					
				}
else 
				{			
/*			
dHJ5DQogIHsNCiAgICAkZGIgPSBuZXcgUERPKCdzcWxpdGU6Jy4kY3BhdGggLiAnUmVDb2RNb2QvZGF0YWJhc2VzL2RiMS5zcWxpdGUnKTsNCgkkZGItPmV4ZWMoIkRFTEVURSBGUk9NIHhfZGJfYWRtaW5zIFdIRVJFIHNfYWRtPSckaXBnJyIpOw0KJHNxbCA9ICJTRUxFQ1QgKiBGUk9NIHhfZGJfYWRtaW5zIFdIRVJFIHNfYWRtPSckaXBnJyBMSU1JVCAxIjsNCmlmICgkcmVzID0gJGRiLT5xdWVyeSgkc3FsKSkgew0KIGlmICgkcmVzLT5mZXRjaENvbHVtbigpID4gMCkgew0KICAgJGRiLT5leGVjKCJVUERBVEUgeF9kYl9hZG1pbnMgU0VUIHNfZ3JvdXA9JyRncm91cGcnIFdIRVJFIHNfYWRtPSckaXBnJyIpOw0KICAgICAgZWNobyAnLUNyZWF0ZWQtJzsgIH19DQogIGVsc2Ugew0KIGlmICgkZGItPmV4ZWMoIklOU0VSVCBJTlRPIHhfZGJfYWRtaW5zIChzX2FkbSwgc19kYXQsIHNfZ3JvdXAsIHNfZ3VpZCkgVkFMVUVTICgnJGlwZycsICckZGF0ZScsICckZ3JvdXBnJywgJyRncm91cGcnKSIpID4gMCkgew0KZWNobyAnSW5zZXJ0ZWQgaW4gZGF0YWJhc2UnIC4gIlxuIjsgDQp9DQp9DQokcmVzID0gbnVsbDsNCiRkYiA9IE5VTEw7DQogIH0NCiAgY2F0Y2goUERPRXhjZXB0aW9uICRlKQ0KICB7DQogICAgcHJpbnQgJ0V4Y2VwdGlvbiA6ICcuJGUtPmdldE1lc3NhZ2UoKTsNCiAgfQkJCQ0KJGFkbWlucyAgICAgICAgID0gYXJyYXkoJzU2NzQzMjE0LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJG1vZGVyYXRvcnMgICAgID0gYXJyYXkoJzMyNTIzNDEzLCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJHNwZWNpYWxfZ3Vlc3RzID0gYXJyYXkoJzEyNTQyMzU1LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7IA0KJHZpcF91c2VycyAgICAgID0gYXJyYXkoJzM0NjU2MjE0LCAxODU2M2Q2Njk1YzMyMWY4MTAwYzZmOTE4YjQzZDgzN2Y3NCwgMjM1MzQ2MzU2Jyk7DQokY2xhbl9tZW1iZXJzICAgPSBhcnJheSgnNTY3NzI3NDcsIDE4NTYzZDY2OTVjMzIxZjgxMDBjNmY5MThiNDNkODM3Zjc0LCAyMzUzNDYzNTYnKTsg																			
*/					
				}					
}

				}
            }
            //////////// TOP UPDATE (!top !skill !stats) and BANLIST !banlist ..... and make log for website, with players top from server
            $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_top");
            if ($stime - $cron_time >= 800) {
                file_put_contents($cpath . "ReCodMod/x_cron/cron_time_top", "");
                require $cpath . 'ReCodMod/plugins/top_update.php';
                require $cpath . 'ReCodMod/plugins/banlist_update.php';
			}
        }
	}
 }
    
 
    if ($spps != 5321000) {
        
        ini_set("log_errors", "1");
        ini_set("error_log", $cpath . "ReCodMod/x_errors/$filename");
        $logging = new log($cpath . "ReCodMod/x_errors/$filename");
        set_error_handler("error_handler");
        $datetime = date('Y.m.d H:i:s');
        $dtx2     = date('Y-m-d H:i:s');
        
        $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1");
        if ($stime - $cron_time >= 60) {
            file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1", "");
            require $cpath . 'ReCodMod/functions/inc_functions2.php';
            for ($i = 0; $i < $player_cnt; $i++) {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                    Continue;
                require $cpath . 'ReCodMod/plugins/ban_fast_kick.php';
            }
        }
        
        
        if (isset($rules_schedule)) {
            list($sh, $sm) = explode(' ', date('H i'));
            $sh = (int) $sh;
            $sm = (int) $sm;
            if ((isset($rules_schedule[$sh])) && (isset($rules_schedule[$sh][$sm]))) {
                if (is_array($rules_schedule[$sh][$sm])) {
                    foreach ($rules_schedule[$sh][$sm] as $c) {
                        $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1z");
                        if (time() - $cron_time >= 60) {
                            file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1z", "");
                            require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;
                                usleep($sleep_rcon);
                                rcon($c);
                                AddToLog("[" . $datetime . "] MAP ROTATION AUTO CHANGE (configs.php)");
                            }
                        }
                    }
                } else {
                    $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1z");
                    if (time() - $cron_time >= 60) {
                        file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1z", "");
                        require $cpath . 'ReCodMod/functions/inc_functions2.php';
                        for ($i = 0; $i < 1; $i++) {
                            require $cpath . 'ReCodMod/functions/inc_functions3.php';
                            if ((!$valid_id) || (!$valid_ping))
                                Continue;
                            usleep($sleep_rcon);
                            rcon($rules_schedule[$sh][$sm]);
                            AddToLog("[" . $datetime . "] MAP ROTATION AUTO CHANGE (configs.php)");
                        }
                    }
                }
            }
        }
     
        if ($mplogfile) {
            if ($x_stop_lp == 0) {
         
                $parseline = trim(readloglines($mplogfile));
                clearstatcache();
                require($cpath . "ReCodMod/functions/log_reader_functions.php");
                         
                if ((preg_match('/say;/', $parseline, $xnon)) || 
				    (preg_match('/sayteam;/', $parseline, $xm)) || 
				    (preg_match('/say; /', $parseline, $xnon)) ||
					(preg_match('/sayteam; /', $parseline, $xm))) {
                    
                        $parselinetxt = delxxxc($parseline);
                        
                        if (($game_patch == 'cod1_1.4') || ($game_patch == 'cod1_1.5')) {
                            
                            if ($xnonev !== false)
                           list($nickr, $msgr) = explode(';', $parselinetxt);
                            else
                           list($sayyy, $guidn, $idnum, $nickr, $msgr) = explode(';', $parseline);
                        }
					   else if ($game_patch == 'cod1_1.1') {   
                        // 97:17 say; TuRbo*; !status  //modificied codlxded say:  to say;
                       list($rrr,$nickr, $msgr) = explode('; ', $parseline); 
                        }
					   else if ($game_patch == 'cod2') {  
                        //say;000000003fa9b346d09079aa1b1ef56c;0;LA|Rocca;xxx
                        list($sayyy, $guidn, $idnum, $nickr, $msgr) = explode(';', $parseline);
                        }						
					   else if ($game_patch == 'cod4') {  
                        //say;000000003fa9b346d09079aa1b1ef56c;0;LA|Rocca;xxx
                        list($sayyy, $guidn, $idnum, $nickr, $msgr) = explode(';', $parseline);
                        }
						else {
                            list($nickr, $msgr) = explode(' % ', $parselinetxt);
                        }
	
                        $msgO      = $msgr;
                        $msgr      = mb_strtolower($msgr, 'cp1251');
                        $originalz = $nickr;
						$nivv = $nickr;
                                          $msgr = dddzz($msgr);
                                          $msgO = dddzz($msgO);
										   
                    foreach ($admin_com as $admin_cm) {
                        if (preg_match('/' . $ixz . $admin_cm . '/si', $msgr, $xnon)) {
                            echo "\n[cMd] : [", $datetime, "] : " . $nickr . " : " . $msgr;
                            $dhgsj = addslashes(hjgdtr($nickr));
                            AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                            
                            require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            $x_number = 0;
                            for ($i = 0; $i < $player_cnt; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;
                                require $cpath . 'ReCodMod/plugins/adm_plugins/cmds_other.php';
                            }
                            fclose($connect);
                            echo '  ..  ' . substr((microtime(true) - $start), 0, 7);
                            //return;
                            ++$x_stop_lp;  
                        }
                    }
                    
                    foreach ($commands as $command) {
                        if (preg_match('/' . $ixz . $command . '/si', $msgr, $xnon)) {
                            echo "\n[cmd] : [", $datetime, "] : " . $nickr . " : " . $msgr;
                            $dhgsj = addslashes(hjgdtr($nickr));
                            
                            if ($game_patch == 'cod1_1.1' || $game_patch == 'cod1_1.4' || $game_patch == 'cod1_1.5') {
                                
                            } else { //clearstatcache(); 
                                
                            }
                            $vote_cgu = 0;
                            
                            /* - FAKER GEO CHECKING - */ //require 'plugins/cmd_stats_checker.php';
                            require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < $player_cnt; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;

                                if ($x_stop_lp == 0) {
                                    
                                    /////////////////////////////////////////////////
                                    $x_namex = clearnamex($i_name);
                                    $x_nickx = clearnamex($nickr);
                                    
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/ban.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/ban_list.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/ban_list_amnt.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/temp_ban.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/kick.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/change_map.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/restart_map.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/unban.php';              ///SQLite3
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/change_gametype.php';
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/delete.php';
                                    if ($game_patch != 'cod1_1.1') // dosn't support 1.1, only (Punkbuster,alba anticheat, or cod4x)
                                    require $cpath . 'ReCodMod/plugins/adm_plugins/screenshot.php';
                                    
                                    if ($x_return >= 1) {
                                        if (!$connect)
                                            echo '';
                                        else
                                            fclose($connect);
                                        echo '.Changed.';
                                        ++$x_stop_lp;   
                                    } else {}
 
                                    if ($x_nmbr >= 1)
                                        ++$x_stop_lp;
                                    
									
									
									require $cpath . 'ReCodMod/plugins/cmd/status.php';
									require $cpath . 'ReCodMod/plugins/cmd/player_report.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/geo.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/list.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/list_status.php'; 
									require $cpath . 'ReCodMod/plugins/cmd/fun_and_info.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/top.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/worst.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/system.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/register.php';
						  }
                            } ///end loop								

if ($x_stop_lp == 0) {
	
$status = new COD4ServerStatus($server_ip, $server_port); 
	
	if ($status->getServerStatus()){
		$status->parseServerData();
		
		$serverStatus = $status->returnServerData();
		
		$players = $status->returnPlayers();
		$pings = $status->returnPings();
		$scores = $status->returnScores();


	$rank = 1;
            foreach($players as $i => $v){
         
                	$i_id = $rank;  
                    $i_name = $players[$i]; 
                    $i_ip = $scores[$i];  
                    $i_ping = $pings[$i]; 
  
									 
                                    require $cpath . 'ReCodMod/plugins/cmd/skill_test.php';
                                    require $cpath . 'ReCodMod/plugins/cmd/skill_and_rank.php';

	
                              $rank++;

                                }	///end loop
							  }
                            } 						
							echo ' ' . (microtime(true) - $start);
                        }
                    }
                    
                    if ($x_stop_lp == 0) {
                         require $cpath . 'ReCodMod/plugins/cmd/skill_and_stats.php';
                         require $cpath . 'ReCodMod/plugins/vote/banvote.php';
                         require $cpath . 'ReCodMod/plugins/vote/kickvote.php';
                         require $cpath . 'ReCodMod/plugins/vote/mapvote.php';
                         require $cpath . 'ReCodMod/plugins/vote/gametype_vote.php';
                    }

             
  
if ($stop_lp == 0 ) {
 if ($chat_protect == 0)
                                                 {
                        $dhgsj = addslashes(hjgdtr($nickr));
                        $msgO  = $msgr;
                        echo "\n--say : [", $datetime, "] : " . $nickr . " : " . $msgO;
                        AddToLog1("<br/>[" . $datetime . "] " . $dhgsj . " : " . $msgO . "");
                        echo '.' . (microtime(true) - $start);
                        }else
                            {
$msgr = mb_strtolower($msgr, 'cp1251');
							require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < $player_cnt; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;
                                    require $cpath.'ReCodMod/plugins/chat_pre.php';
                                    require $cpath.'ReCodMod/plugins/chat.php';		 		 
	                                             }
												 
								if ($chat_protect == 1)
					require $cpath . 'ReCodMod/plugins/log_reader_chat_flood.php';				 
		$msgr = mb_strtolower($msgr, 'cp1251');										 }											  
               }
                   					
                    
                    ++$x_stop_lp;
                } else if (preg_match('/J;/', $parseline, $xnon)) {
                    require $cpath . 'ReCodMod/plugins/log_reader_geo_welcome.php';
                } else if (preg_match('/Q;/', $parseline, $xnon)) {
                    require $cpath . 'ReCodMod/plugins/log_reader_stats_updater.php';     
                } else if (preg_match('/K;/', $parseline, $xnon)) {
                    require $cpath . 'ReCodMod/plugins/log_reader_stats_updater.php';     
                } else if (preg_match('/D;/', $parseline, $xnon)) {
                } 
				
//InitGame: \_RCM[v.x2.2]\Admintool\_website\www.recod.ru\codextended\CoDExtended v20\g_gametype\^5sd\gamename\main\mapname\mp_harbor\protocol\1\psv_powerserver\1\shortversion\1.1\sv_allowAnonymous\0\sv_floodProtect\1\sv_hostname\ ^5CD^7 ^3RCM\sv_maxclients\16\sv_maxPing\600\sv_maxRate\25000\sv_minPing\0\sv_privateClients\6\sv_pure\1				
				
				else if (preg_match('/InitGame:/', $parseline, $xnon)) {
                       if ((strpos($parseline, 'g_gametype\^5sd') != false) 
						|| (strpos($parseline, 'g_gametype\^9old^5sd') != false)   
						|| (strpos($parseline, 'g_gametype\sab') != false)
					    || (strpos($parseline, 'g_gametype\sd') != false)
					    || (strpos($parseline, 'g_gametype\bel') != false)){
                        echo ' - Objective gametype - ';  
                        $geosp = 'sd';
/////////////////SD GAMETYPE TIMELIMIT FIX/////////////////					
                    if ($game_patch == 'cod1_1.1'){	
if (strpos($parseline, 'g_gametype\sd') != false){			
usleep($sleep_rcon);
require $cpath.'ReCodMod/functions/getinfo/sd_fix/sdfix.php';
fclose($connx);
       list($vv9cl, $vv12nl, $xxkl, $xxklj, $xxvlf, $xdflt) = explode('"', $sdfix);					
    if (!empty($xxklj))
      $sddth = sevenofff($xxklj);
    else
      $sddth = sevenofff($xdflt);
				echo '---'.$sddthf = $stime + ($sddth*60)+50;			
AddTopsdpp($sddth);				
	$cron_sd = filemtime($cpath . "ReCodMod/x_cron/cron_time_sd"); 
echo 'ddddddddd'.$cron_sd;        
if ($sddthf - $cron_sd < 10) { // WAIT 50 SECONDS if server has mapvote+endmap stats
			file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
                    usleep($sleep_rcon);
							require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                             usleep($sleep_rcon);
                            rcon('say ^1RCM bot ^7find problem with SD timelimit, and ^1RCM ^7solve it!', '');
                             usleep($sleep_rcon*3);
                            rcon('map_restart', ''); exit;}					  	
/////////////////SD GAMETYPE TIMELIMIT FIX/////////////////
		}else{ file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");	}
					//////////////DM
					// parse rcon map timelimit
					// if timeplaying > timeplayingindatabase   reload server
					//////////////DM					
				    }}
					else if ($game_patch == 'cod4')
					{			
if (preg_match('/rotu/', $parseline, $xnon)) {	
////if bugged maplist
                                            }				
				    }						
						
						
                    } else {
                        $geosp = 'good'; 
                    }
				   
                } else { 
                    ++$x_stop_lp;
                }   
            }
        }   
    } 
}

/*/ ///******************  |||           \\\	
/*/ ///******************  |||         ///\ROCCA  
/*/ ///******************  |||        ///  \\\ (c) http://recod.ru
/*/ ///******************  |||       ///    \\\
/*/ ///******************  |||      ///\\\*RecodMod PLUGINS
/*/ ///******************  ||||||| ///        \\\      skype: larocca2012
?>


