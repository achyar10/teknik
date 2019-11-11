<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_front extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['main'] = 'home/home';
        $this->load->view('layout_front', $data);
    }

}

/* End of file Home_front.php */
