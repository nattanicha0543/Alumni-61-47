<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller {


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
		echo "</br>";
		// $data['name'] = "Nattanicha";
		// $data['email'] = "nattanicha@gmail.com";
		$data['student'] = array("614259012","nattanicha","panpiemthong","software engineering");
		echo "</br>";
		$this->load->view("hello_view",$data);
	}



}
