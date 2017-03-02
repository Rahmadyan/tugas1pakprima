<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['image'] = '/images/1.png';
		$data['nama'] = "Selamat Datang";
		$this->load->view('home',$data);
	}

	public function video(){
		$this->load->view('more');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
