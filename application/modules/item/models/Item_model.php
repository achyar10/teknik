<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{

    function get($arr = null, $limit = null, $offset = null)
    {
        $this->db->order_by('item_id', 'desc');
        $this->db->join('category', 'category.category_id = item.category_id', 'left');
        return $this->db->get_where('item', $arr, $limit, $offset);
    }

    function get_cat($arr = null, $limit = null, $offset = null)
    {
        $this->db->order_by('category_id', 'desc');
        return $this->db->get_where('category', $arr, $limit, $offset);
    }

    function insert($data)
    {
        return $this->db->insert('item', $data);
    }

    function insert_cat($data)
    {
        return $this->db->insert('category', $data);
    }

    function update($data, $cond)
    {
        return $this->db->update('item', $data, $cond);
    }
}

/* End of file Item_model.php */
