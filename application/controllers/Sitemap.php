<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

    public function index()
    {
        header("Content-Type: text/xml;charset=iso-8859-1");
        $data['title'] = 'Sitemap';
        $this->load->view("sitemap", $data);
    }

}

/* End of file Sitemap.php */
