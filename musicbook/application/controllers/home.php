<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	#funcion del constructor
	function __construct(){
		parent::__construct():
	}

	#llamado a la vista de home desde el controlador
	#aun no funciona no se porque
	function Index(){

		$this->load->view('user/home')
	}



}



?>