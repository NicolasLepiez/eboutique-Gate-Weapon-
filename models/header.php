<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/index.php');

class Model_Header {

	public function isConnect()
	{
		if($_SESSION['id'] == true) {
			$id_session = true;
		} else {
			$id_session = false;
		}
	}
}