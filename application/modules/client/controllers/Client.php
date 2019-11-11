<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('client/Client_model', 'client');
    }
    
    public function index()
    {
        $data['client'] = $this->client->get()->result();
        $data['title'] = 'Partner';
        $data['main'] = 'client/index';
        $this->load->view('layout', $data);
    }

    function add()
    {
        if ($_POST) {

            $data['client_name'] = $this->input->post('client_name');
            if (!empty($_FILES['client_logo']['name'])) {
                $data['client_logo'] = $this->upload_file('client_logo', time() . rand(1111, 9999));
            }
            $this->client->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil diinput');
            redirect('client');
        } else {
            $data['title'] = 'Tambah Partner';
            $data['main'] = 'client/add';
            $this->load->view('layout', $data);
        }
    }

    function edit($id = null)
    {
        if ($_POST) {

            $data['client_name'] = $this->input->post('client_name');
            if (!empty($_FILES['client_logo']['name'])) {
                $data['client_logo'] = $this->upload_file('client_logo', time() . rand(1111, 9999));
            }
            $this->client->update($data, ['client_id' => $id]);
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('client');
        } else {
            $data['client'] = $this->client->get(['client_id' => $id])->row();
            $data['title'] = 'Tambah Partner';
            $data['main'] = 'client/add';
            $this->load->view('layout', $data);
        }
    }

    function upload_file($name = NULL, $fileName = NULL)
    {
        $this->load->library('upload');
        $config['upload_path'] = FCPATH . 'uploads/client/';
        /* create directory if not exist */
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0755, TRUE);
        }
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $fileName;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($name)) {
            $this->session->set_flashdata('failed', $this->upload->display_errors('', ''));
            redirect(uri_string());
        }
        $upload_data = $this->upload->data();
        return $upload_data['file_name'];
    }

}

/* End of file Client.php */
