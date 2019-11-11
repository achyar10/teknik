<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        return $this->db->get_where('post', $arr, $limit, $offset);
    }

    function insert($data)
    {
        return $this->db->insert('post', $data);
    }

    function update($data, $cond)
    {
        return $this->db->update('post', $data, $cond);
    }
}

/* End of file Post_model.php */
