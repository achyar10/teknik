<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/User_model', 'user');
	}

	public function index()
	{
		$data['user'] = $this->user->get(['user_id' => $this->uid])->row();
		$data['title'] = 'Beranda';
		$data['main'] = 'home/index';
		$this->load->view('layout', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/modules/home/Home.php */