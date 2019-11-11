<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item/Item_model', 'item');
    }

    public function index()
    {
        $data['item'] = $this->item->get()->result();
        $data['title'] = 'Katalog Produk';
        $data['main'] = 'item/index';
        $this->load->view('layout', $data);
    }

    function add()
    {
        if ($_POST) {

            $data['item_name'] = $this->input->post('item_name');
            $data['item_price'] = $this->input->post('item_price');
            $data['item_desc'] = $this->input->post('item_desc');
            $data['category_id'] = $this->input->post('category_id');
            if (!empty($_FILES['item_image']['name'])) {
                $data['item_image'] = $this->upload_file('item_image', time() . rand(1111, 9999));
            }
            $this->item->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil diinput');
            redirect('item');
        } else {
            $data['title'] = 'Tambah Produk';
            $data['main'] = 'item/add';
            $this->load->view('layout', $data);
        }
    }

    function edit($id = null)
    {
        if ($_POST) {

            $data['item_name'] = $this->input->post('item_name');
            $data['item_price'] = $this->input->post('item_price');
            $data['item_desc'] = $this->input->post('item_desc');
            $data['category_id'] = $this->input->post('category_id');
            if (!empty($_FILES['item_image']['name'])) {
                $data['item_image'] = $this->upload_file('item_image', time() . rand(1111, 9999));
            }
            $this->item->update($data, ['item_id' => $id]);
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('item');
        } else {
            $data['item'] = $this->item->get(['item_id' => $id])->row();
            $data['title'] = 'Edit Produk';
            $data['main'] = 'item/add';
            $this->load->view('layout', $data);
        }
    }

    function getCat()
    {
        $params = [];
        $res = $this->item->get_cat($params)->result();
        echo json_encode($res);
    }

    function addCat()
    {
        $name = $this->input->post('category_name');
        $data['category_name'] = $name;
        $process = $this->item->insert_cat($data);

        if ($process) {
            exit(json_encode(['status' => TRUE, 'result' => 'OK']));
        } else {
            exit(json_encode(['status' => FALSE, 'result' => 'Not saved']));
        }
    }

    function upload_file($name = NULL, $fileName = NULL)
    {
        $this->load->library('upload');
        $config['upload_path'] = FCPATH . 'uploads/item/';
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

/* End of file Item.php */
