<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	
	private static $_table = 'kategori';
    private static $_pk = 'id_kategori';
    
    // public function is_exist($where)
	// {
	// 	return $this->db->where($where)->get(self::$_table)->row_array();
	// }
 
	public function get_data($where)
	{
		return $this->db->where($where)->get(self::$_table)->row_array();
	}
	public function get_data1()
	{
		return $this->db->get(self::$_table)->row_array();
	}
	public function get_kategori()
	{
		return $this->db->get('kategori')->result_array();
	}
	public function get_terbaru() 
    {
		return $this->db->order_by('created_at','DESC')->limit(5)->get('berita')->result_array();
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