<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gallery/Gallery_model', 'gallery');
    }
    
    public function index()
    {
        $data['gallery'] = $this->gallery->get()->result();
        $data['title'] = 'Galeri';
        $data['main'] = 'gallery/index';
        $this->load->view('layout', $data);
    }

    function add()
    {
        if ($_POST) {

            $data['gallery_name'] = $this->input->post('gallery_name');
            if (!empty($_FILES['gallery_image']['name'])) {
                $data['gallery_image'] = $this->upload_file('gallery_image', time() . rand(1111, 9999));
            }
            $this->gallery->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil diinput');
            redirect('gallery');
        } else {
            $data['title'] = 'Tambah Galeri';
            $data['main'] = 'gallery/add';
            $this->load->view('layout', $data);
        }
    }

    function edit($id = null)
    {
        if ($_POST) {

            $data['gallery_name'] = $this->input->post('gallery_name');
            if (!empty($_FILES['gallery_image']['name'])) {
                $data['gallery_image'] = $this->upload_file('gallery_image', time() . rand(1111, 9999));
            }
            $this->gallery->update($data, ['gallery_id' => $id]);
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('gallery');
        } else {
            $data['gallery'] = $this->gallery->get(['gallery_id' => $id])->row();
            $data['title'] = 'Edit Galeri';
            $data['main'] = 'gallery/add';
            $this->load->view('layout', $data);
        }
    }

    function upload_file($name = NULL, $fileName = NULL)
    {
        $this->load->library('upload');
        $config['upload_path'] = FCPATH . 'uploads/gallery/';
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

/* End of file gallery.php */
