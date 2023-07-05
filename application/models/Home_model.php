<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
	
	private static $_table = 'home';
    private static $_pk = 'h_id';
    
    // public function is_exist($where)
	// {
	// 	return $this->db->where($where)->get(self::$_table)->row_array();
	// }

	public function get_home()
	{
		return $this->db->get(self::$_table)->row_array();
	}

	public function get_steel() 
    {
		return $this->db->where('jenis_kategori','Steel Division')->get('kategori')->result_array();
    }

    	public function get_conce() 
    {
		return $this->db->where('jenis_kategori','Concrete Division')->get('kategori')->result_array();
    }

     	public function get_galvanize() 
    {
		return $this->db->where('jenis_kategori','Galvanize Division')->get('kategori')->result_array();
    }

	public function insert($data)
	{
		return $this->db->insert(self::$_table, $data);
	}

	public function update($data, $id)
	{
		return $this->db->set($data)->where(self::$_pk, $id)->update(self::$_table);
	}

	public function delete($id)
	{
		return $this->db->delete(self::$_table, array('h_id' => $id));
	}
}