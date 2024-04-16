<?php
function call($controller,$action)
{
require_once('controller/'.$controller.'C.php') ;
switch($controller)
	{	case'client' :
		$controller= new clientC() ;
		break ;
	}
	$controller->{$action }() ;
}
$controllers = array ('client'=> ['ajouterclient' ,'afficherclients' ,'supprimerclient','modifierclient','recupererclient','recupererclient1']);
if(array_key_exists($controller,$controllers))
{
	if(in_array($action,$controllers[$controller]))
	{
		call($controller,$action) ;
	}

}
?>