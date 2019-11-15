<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        $this->db->order_by('contact', 'desc');
        return $this->db->get_where('contact', $arr, $limit, $offset);
    }

    function insert($data)
    {
        return $this->db->insert('contact', $data);
    }

    function update($data, $cond)
    {
        return $this->db->update('contact', $data, $cond);
    }
}

/* End of file Contact_model.php */
