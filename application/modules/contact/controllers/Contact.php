<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact/Contact_model', 'contact');
    }

    public function index()
    {
        $data['contact'] = $this->contact->get()->result();
        $data['title'] = 'Pesan Masuk';
        $data['main'] = 'contact/index';
        $this->load->view('layout', $data);
    }

    function detail($id = null)
    {
        $this->contact->update(['contact_status' => 1], ['contact_id' => $id]);
        $data['contact'] = $this->contact->get(['contact_id' => $id])->row();
        $data['title'] = 'Pesan Masuk Detail';
        $data['main'] = 'contact/detail';
        $this->load->view('layout', $data);
    }

}

/* End of file Contact.php */
