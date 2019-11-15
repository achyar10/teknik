<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_front extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item/Item_model', 'item');
    }
    
    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['item'] = $this->item->get(null, 8)->result();
        $data['intro'] = $this->db->get_where('welcome', ['id' => 1])->row();
        $data['main'] = 'home/home';
        $this->load->view('layout_front', $data);
    }
}

/* End of file Home_front.php */
