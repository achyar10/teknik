<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item/Item_model', 'item');
        $this->load->model('category/Category_model', 'category');
        $this->load->model('contact/contact_model', 'contact');
        $this->load->model('post/Post_model', 'post');
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
        $q = $this->input->get(NULL, TRUE);
        $data['q'] = $q;
        $params = [];

        if (isset($q['cat']) && !empty($q['cat']) && $q['cat'] != '') {
            $params['item.category_id'] = $q['cat'];
        }

        if (isset($q['product']) && !empty($q['product']) && $q['product'] != '') {
            $product = $q['product'];
            $params['item_name LIKE'] = "%$product%";
        }

        $data['item'] = $this->item->get($params)->result();
        $data['cat'] = $this->category->get()->result();
        $data['title'] = 'Katalog Produk';
        $data['main'] = 'pages/product';
        $this->load->view('layout_front', $data);
    }

    function post()
    {
        $this->load->library('pagination');
        $page = $this->input->get('per_page');

        $limit = 5;

        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $params['post_status'] = 1;
        $config['page_query_string'] = TRUE;
        $config['enable_query_strings'] = TRUE;
        $config['query_string_segment'] = 'per_page';
        $config['base_url'] = site_url('pages/post');
        $config['per_page'] = $limit;
        $config['total_rows'] = $this->post->get($params)->num_rows();
        $this->pagination->initialize($config);

        $data['jlhpage'] = $page;
        $data['post'] = $this->post->get($params, $limit, $offset)->result_array();
        $data['title'] = 'Redaksi';
        $data['main'] = 'pages/post';
        $this->load->view('layout_front', $data);
    }

    function read($year, $month, $day, $id = null)
    {
        $data['post'] = $this->post->get(['post_id' => $id])->row();        
        $data['title'] = 'Detail';
        $data['main'] = 'pages/post_detail';
        $this->load->view('layout_front', $data);
    }

}

/* End of file Pages.php */
