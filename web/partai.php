<?
/********************************************************************
*	Date		: 15 April 2014
*	Author		: muhammad hafidz
*	Email		: hafidz@cybergl.co.id
*	Copyleft	: eGov Lab UI 
*********************************************************************/
require("config.php"); 
#------------------------init
//$ses->authenticate();
$doc->pagetitle="Partai";
$doc->status="";

#------------------------proc
switch ($_POST["cmd"]) {
	case "Submit":
        $partai=$api->get_partai($_POST[partai_id]);
        $hasil_decode=json_decode($partai);
        
        $partai=str_replace(",",",<br/>",$partai);
		$doc->content("post/success.php");
	break;
	default:
		$doc->content("post/form.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>