<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('post/Post_model', 'post');
    }

    public function index()
    {
        $data['post'] = $this->post->get()->result();
        $data['title'] = 'Redaksi';
        $data['main'] = 'post/index';
        $this->load->view('layout', $data);
    }

    function add()
    {
        if ($_POST) {

            $data['post_title'] = $this->input->post('title');
            $data['post_desc'] = $this->input->post('desc');
            $this->post->insert($data);
            $this->session->set_flashdata('success', 'Data disimpan');
            redirect('post');
        } else {
            $data['title'] = 'Tambah Redaksi';
            $data['main'] = 'post/add';
            $this->load->view('layout', $data);
        }
    }

    function edit($id = null)
    {
        if ($_POST) {
            $data['post_title'] = $this->input->post('title');
            $data['post_desc'] = $this->input->post('desc');
            $this->post->update($data, ['post_id' => $id]);
            $this->session->set_flashdata('success', 'Data diubah');
            redirect('post');
        } else {
            $data['title'] = 'Ubah Redaksi';
            $data['main'] = 'post/add';
            $this->load->view('layout', $data);
        }
    }

    function upload()
    {
        define("UPLOADDIR", "./media/images/post/");
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

            $info = pathinfo($_FILES['image']['name']);
            $name = time() . rand(1111, 9999) . '.' . $info['extension'];
            $file = array_shift($_FILES);

            if (move_uploaded_file($file['tmp_name'], UPLOADDIR . $name)) {

                $data = array(
                    'success' => true,
                    'file'    => base_url() . "media/images/post/" . $name
                );
            } else {
                $error = true;
                $data = array(
                    'message' => 'uploadError',
                );
            }
        } else {
            $data = array(
                'message' => 'uploadNotAjax',
                'formData' => $_POST
            );
        }
        echo json_encode($data);
    }
}

/* End of file Post.php */
