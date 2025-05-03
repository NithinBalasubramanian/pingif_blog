<?php
class Admin_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function table($table)
		{
			return $fields = $this->db->list_fields($table);
			$this->db->last_query();
		}
	public function table_column($tablename,$column = FALSE,$val = FALSE,$column1 = FALSE,$val1 = FALSE)
	{
		$return = array();
		$this->db->select('*');
		$this->db->from($tablename);
		if($column != FALSE) {
			$this->db->where($column, $val);
		}
		if($column1 != FALSE) {
		$this->db->where($column1, $val1);
		}
		$result = $this->db->get();
		
	//	return $this->db->last_query();
		return $result->result_array();
	}
	public function table_column_desc($tablename,$column = FALSE,$val = FALSE,$column1 = FALSE,$val1 = FALSE)
	{
		$return = array();
		$this->db->select('*');
		$this->db->from($tablename);
		if($column != FALSE) {
			$this->db->where($column, $val);
		}
		if($column1 != FALSE) {
		$this->db->where($column1, $val1);
		}
		$this->db->order_by('id','DESC');
		$result = $this->db->get();
	//	return $this->db->last_query();
		return $result->result_array();
	}
	public function table_column_like($tablename,$column = FALSE,$val = FALSE,$column1 = FALSE,$val1 = FALSE,$column2 = FALSE,$val2 = FALSE)
	{
		$return = array();
		$this->db->select('*');
		$this->db->from($tablename);
		if($column != FALSE) {
			$this->db->like($column, $val);
		}
		if($column1 != FALSE) {
		$this->db->or_like($column1, $val1);
		}
		if($column2 != FALSE) {
			$this->db->or_like($column2, $val2);
		}
		$this->db->order_by('id','DESC');
		$result = $this->db->get();
	//	return $this->db->last_query();
		return $result->result_array();
	}
	public function create($tablename,$data=array())
		{
			$this->db->insert($tablename,$data);
			return $this->db->insert_id();
	}
	public function update_data($tablename,$data=array(),$where=array())
		{
			$this->db->update($tablename,$data,$where);
	}
	public function side_news($tablename,$column,$val,$column1 = FALSE,$val1 = FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where('blog_id !=', $val);
			if($column1 != FALSE) {
				$this->db->where($column1, $val1);
			}
			$this->db->order_by('id','DESC');
			$this->db->limit('5');
			$result = $this->db->get();
	//	return $this->db->last_query();
		return $result->result_array();
		}
	public function delete_data($tablename,$data)
		{
			$this->db->delete($tablename,$data);
		}
	public function latest($tablename , $column = FALSE ,$to = FALSE , $from = FALSE , $column1 =FALSE , $val1 = FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			if($column != FALSE){
				$this->db->order_by($column , 'DESC');
			}
			if($column1 != FALSE)
			{
				$this->db->where($column1, $val1);
			}
			$this->db->limit($to ,$from);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
}