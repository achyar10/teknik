<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        $this->db->order_by('post_id', 'desc');
        $this->db->select('post.*, user_fullname');
        $this->db->join('users', 'users.user_id = post.user_id', 'left');
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
