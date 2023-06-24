<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model
{
	
	private static $_table = 'project';
    private static $_pk = 'id_project';
    
    // public function is_exist($where)
	// {
	// 	return $this->db->where($where)->get(self::$_table)->row_array();
	// }

	public function get_data($where)
	{
		return $this->db->where($where)->get(self::$_table)->row_array();
	}

	public function get_project()
	{
		return $this->db->get('project')->result_array();
	}

	public function get_berjalan() 
    {
		return $this->db->where('status','Berjalan')->get(self::$_table)->result_array();
    }
	public function get_selesai() 
    {
		return $this->db->where('status','Selesai')->get(self::$_table)->result_array();
    }
	public function get_kategori()
	{
		return $this->db->get('kategori')->result_array();
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
		return $this->db->delete(self::$_table, array('id_project' => $id));
	}
}