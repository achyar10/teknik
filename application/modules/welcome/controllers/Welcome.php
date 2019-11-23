<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index()
    {
        if ($_POST) {

            $data['title'] = $this->input->post('title');
            $data['desc'] = $this->input->post('desc');
            $this->db->update('welcome', $data, ['id' => 1]);
            $this->session->set_flashdata('success', 'Perubahan disimpan');
            redirect('welcome');
        } else {
            $data['welcome'] = $this->db->get_where('welcome', ['id' => 1])->row();
            $data['title'] = 'Halaman Utama';
            $data['main'] = 'welcome/index';
            $this->load->view('layout', $data);
        }
    }

    function profile()
    {
        if ($_POST) {

            $data['visi'] = $this->input->post('visi');
            $data['misi'] = $this->input->post('misi');
            $data['desc'] = $this->input->post('desc');
            $this->db->update('profile', $data, ['id' => 1]);
            $this->session->set_flashdata('success', 'Perubahan disimpan');
            redirect('profile');
        } else {
            $data['profile'] = $this->db->get_where('profile', ['id' => 1])->row();
            $data['title'] = 'Visi & Misi';
            $data['main'] = 'welcome/profile';
            $this->load->view('layout', $data);
        }
    }

}

/* End of file Welcomde.php */
