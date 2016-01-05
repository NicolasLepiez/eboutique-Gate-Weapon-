<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/header.php');

class Controller_Header {

	public function connect_deconnect($id_session) 
	{
		if ($id_session == true) {
			$connect = 'deconnexion';
		} else {
			$connect = 'connexion';
		}
	}
}