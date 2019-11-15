<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_front extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact/contact_model', 'contact');
    }

    public function index()
    {
        if ($_POST) {
            $data['contact_name'] = $this->input->post('contact_name');
            $data['contact_email'] = $this->input->post('contact_email');
            $data['contact_phone'] = $this->input->post('contact_phone');
            $data['contact_desc'] = $this->input->post('contact_desc');
            $this->contact->insert($data);
            $this->session->set_flashdata('success', 'Pesan anda terkirim');
            redirect('front/contact');
        } else {
            $data['title'] = 'Hubungi Kami';
            $data['main'] = 'contact/contact';
            $this->load->view('layout_front', $data);
        }
    }
}

/* End of file Contact_front.php */
