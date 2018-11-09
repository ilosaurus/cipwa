<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$json = file_get_contents('http://localhost/cirest/index.php/article');
		$data['obj'] = json_decode($json);
		// echo "<pre>"; print_r($obj);echo "</pre>";
		
		$this->load->view('V_home', $data);
	}
}
