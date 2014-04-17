<?
/*
Author		: muhammad hafidz
Date		: 15 April 2014
Copyleft	: eGov Lab UI
Contact		: hafidz@cybergl.co.id
Version		: 0.0.1
*/

class api extends db_connection {
    function get_partai($partai_id) {
		$content = file_get_contents(partai_url.'/api.php?cmd=search&partai_id='.$partai_id);
        return $content;
	}    
}
?>
