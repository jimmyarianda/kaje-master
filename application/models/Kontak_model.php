<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    
    private static $_table = 'kontak';
    private static $_pk = 'id_kontak';
    
    public function is_exist($where)
    {
        return $this->db->where($where)->get(self::$_table)->row_array();
    }

    public function get_kontak($where) 
    {
        return $this->db->where($where)->get(self::$_table)->row_array();
    }
    public function get_kategori()
	{
		return $this->db->get('kategori')->result_array();
	}
    public function get_kontak1()
	{
		return $this->db->get('kontak')->result_array();
	}


    public function insert($data) 
    {
        return $this->db->insert(self::$_table, $data);
    }
    
    public function update($data, $usr_id) 
    {
        return $this->db->set($data)->where(self::$_pk, $usr_id)->update(self::$_table);
    }

    public function delete($id)
	{
		return $this->db->delete(self::$_table, array('id_kontak' => $id));
	}
}