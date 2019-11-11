<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        return $this->db->get_where('gallery', $arr, $limit, $offset);
    }

    function insert($data)
    {
        return $this->db->insert('gallery', $data);
    }

    function update($data, $cond)
    {
        return $this->db->update('gallery', $data, $cond);
    }
}

/* End of file gallery_model.php */
