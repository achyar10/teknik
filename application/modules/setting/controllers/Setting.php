<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('setting/Setting_model', 'setting');
    }


    public function index()
    {
        if ($_POST) {

            $data['address'] = $this->input->post('address');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            $data['whatsapp'] = $this->input->post('whatsapp');
            $this->setting->update($data, ['id' => 1]);
            $this->session->set_flashdata('success', 'Perubahan disimpan');
            redirect('setting');
        } else {
            $data['setting'] = $this->setting->get(['id' => 1])->row();
            $data['title'] = 'Pengaturan';
            $data['main'] = 'setting/index';
            $this->load->view('layout', $data);
        }
    }
}

/* End of file Setting.php */
