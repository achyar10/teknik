<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_front extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Profil';
        $data['profile'] = $this->db->get_where('profile', ['id' => 1])->row();
        $data['main'] = 'profile/profile';
        $this->load->view('layout_front', $data);
    }

}

/* End of file Profile_front.php */
