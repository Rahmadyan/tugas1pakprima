<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' =>"Rahmadyan Nurwidhi Biddaris", 
				'nim' =>"1541180175", 
				'alamat' =>"Jl. Ikan Gurami, No.03, Lowokwaru, Malang", 
				'telp' =>"085745066490", 
				'hoby' =>"Bermain Game", 
				'email' =>"rahmadyan98@gmail.com", 
				'youtube' =>"https://www.youtube.com/channel/UCEiaAa5YNZf5LomVCdTx53g", 
				);
		$this->load->view('about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */