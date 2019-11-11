<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        return $this->db->get_where('client', $arr, $limit, $offset);
    }

    function insert($data)
    {
        return $this->db->insert('client', $data);
    }

    function update($data, $cond)
    {
        return $this->db->update('client', $data, $cond);
    }
}

/* End of file Client_model.php */
