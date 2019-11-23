<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item/Item_model', 'item');
        $this->load->model('contact/contact_model', 'contact');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['item'] = $this->item->get(null, 8)->result();
        $data['intro'] = $this->db->get_where('welcome', ['id' => 1])->row();
        $data['main'] = 'pages/home';
        $this->load->view('layout_front', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profil';
        $data['profile'] = $this->db->get_where('profile', ['id' => 1])->row();
        $data['main'] = 'pages/profile';
        $this->load->view('layout_front', $data);
    }

    function contact()
    {
        if ($_POST) {
            $data['contact_name'] = $this->input->post('contact_name');
            $data['contact_email'] = $this->input->post('contact_email');
            $data['contact_phone'] = $this->input->post('contact_phone');
            $data['contact_desc'] = $this->input->post('contact_desc');
            $this->contact->insert($data);
            $this->session->set_flashdata('success', 'Pesan anda terkirim');
            redirect('pages/contact');
        } else {
            $data['title'] = 'Hubungi Kami';
            $data['main'] = 'pages/contact';
            $this->load->view('layout_front', $data);
        }
    }

    function product()
    {
        $data['title'] = 'Katalog Produk';
        $data['item'] = $this->item->get()->result();
        $data['main'] = 'pages/product';
        $this->load->view('layout_front', $data);
    }

}

/* End of file Pages.php */
