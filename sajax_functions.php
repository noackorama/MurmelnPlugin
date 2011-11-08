<?php
if (!isset($pluginrelativepath)){
require '../../../../lib/bootstrap.php';
page_open(array("sess" => "Seminar_Session", "auth" => "Seminar_Auth", "perm" => "Seminar_Perm", "user" => "Seminar_User"));
require_once 'lib/visual.inc.php';
require_once 'lib/functions.php';
URLHelper::setBaseUrl('/');
}
require("Sajax.php");
function get_highscore(){
	$db = new DB_Seminar("SELECT MAX(score) FROM murmeln_highscore");
	$db->next_record();
	return $db->f(0);
}

function get_highscore_list(){
	$db = new DB_Seminar("SELECT murmeln_highscore.*,username FROM murmeln_highscore LEFT JOIN auth_user_md5 USING(user_id) ORDER BY score DESC LIMIT 20");
	$ret = '<ol>';
	$maxscore = 0;
	while($db->next_record()){
		$ret .= '<li><b>'.$db->f('score').'</b> - 
				'.($db->f('username') ? '<a href="'.UrlHelper::getLink('about.php?username='.$db->f('username')).'">'.htmlReady(get_fullname_from_uname($db->f('username'))).'</a>' : htmlready($db->f('name'))).'</li>';
		$maxscore = $db->f('score');
	}
	$ret .= '</ol>';
	$db->query("DELETE FROM murmeln_highscore WHERE score < " . $maxscore);
	return $ret;
}

function set_highscore($score = 0){
	$db = new DB_Seminar("INSERT INTO murmeln_highscore (score,user_id,name) VALUES (
							$score, '".$GLOBALS['user']->id."','".mysql_escape_string(get_fullname())."')");
	return $db->affected_rows();
}

$GLOBALS['sajax_remote_uri'] = $pluginrelativepath .'/sajax_functions.php';
$GLOBALS['sajax_debug_mode'] = 0;
sajax_init();
sajax_export("get_highscore","get_highscore_list","set_highscore");
sajax_handle_client_request(); 
?>
