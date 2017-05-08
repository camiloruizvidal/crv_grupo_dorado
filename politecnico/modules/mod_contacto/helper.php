<?php
class ModContacto
{
    public static function getContacto(&$params)
	{		$app 		=	JFactory::getApplication();		$appParames	=	$app->getParams();		$data=array();		$data['gmaps']		=	$params->get('gmaps_contacto');		$data['direccion']	=	$params->get('direccion_contacto');		$data['tel1']		=	$params->get('telefono1_contacto');		$data['tel2']		=	$params->get('telefono2_contacto');		$data['email']		=	$params->get('email_contacto');		return $data;
	}
}