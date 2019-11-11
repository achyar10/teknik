<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category/Category_model', 'category');
	}

	public function index()
	{
		$data['category'] = $this->category->get()->result();
		$data['title'] = 'Daftar Kategori';
		$data['main'] = 'category/index';
		$this->load->view('layout', $data);
	}

	function add(){
		$data['category_name'] = htmlspecialchars($this->input->post('category_name'));

		$status = $this->category->insert($data);

		if($status){
			$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
			redirect('category');
		} else {
			$this->session->set_flashdata('failed', 'Data gagal disimpan');
			redirect('category');
		}
	}

	function edit(){
		$id = $this->input->post('id');
		$data['category_name'] = htmlspecialchars($this->input->post('category_name'));

		$status = $this->category->update($data, ['category_id'=>$id]);

		if($status){
			$this->session->set_flashdata('success', 'Update berhasil');
			redirect('category');
		} else {
			$this->session->set_flashdata('failed', 'Update gagal');
			redirect('category');
		}
	}

}

/* End of file category_category.php */
/* Location: ./application/modules/category/controllers/category_category.php */