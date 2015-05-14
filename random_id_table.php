<?php
function get_id(){
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$date =  md5(date('Y-m-d H:i:s'));
		$rand =  substr(str_shuffle($chars),0,8);
		$return  = sha1($date.$rand);
			echo $return;
		}
		

		echo '<table>';
		for($i=0;$i<1250;$i++){
			

		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$date =  md5(date('Y-m-d H:i:s'));
		$rand =  substr(str_shuffle($chars),0,8);
		$return  = sha1($date.$rand);
			echo '<tr><td>'.$return.'</td></tr>';
			}
		echo '</table>';	
?>