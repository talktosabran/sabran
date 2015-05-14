<?php
function get_id(){
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$date =  md5(date('Y-m-d H:i:s'));
		$rand =  substr(str_shuffle($chars),0,8);
		$return  = sha1($date.$rand);
			echo $return;
		}
		
		for($i=0;$i<=25;$i++){
			echo '<pre>'.$i.'&nbsp;&nbsp;&nbsp;';
			get_id();
			echo '</pre>';
			}
?>