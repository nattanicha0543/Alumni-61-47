<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


function __construct()
{
	parent::__construct();
	echo "My Construct"."</br>";
}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function show($name=null,$last=null)
	{
		echo"Hello ".$name." ".$last;
		$this->_display();
	}

	public function _display()
	{
		echo "</br>"."SEEEEEEEEEEEEEEEEEEEEEEEEEEEEEBAR";
	}

}
