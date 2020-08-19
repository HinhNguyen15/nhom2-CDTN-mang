<?php
class Basemodel extends CI_Model
{
	public $table="";

	public function getByid($id){
		 $this->load->database();
 		 $qr = $this->db->query("SELECT * FROM ".$this->table." WHERE id = $id ");
 		 $data = $qr->first_row("array");
 		 return $data;
	} 
	public function add($data){
		if($this->db->insert($this->table,$data))
			return true;
		return false;
	}
	public function getAll($limit=10,$offset=0){
			$qr = $this->db->select("*");
			$qr = $this->db->limit($limit,$offset);
			$qr = $this->db->order_by("id","desc");
			$qr = $this->db->get($this->table);
			// echo $this->db->num_rows()
			if($qr->num_rows()){
				return $qr->result_array();

			}
			return array();
	}

	public function update($data)
	{
		$this->db->where('id', $data["id"]);
		$this->db->update($this->table, $data);
		return;
	}
	public function delete($id)
	{
		$this->db->delete($this->table, array('id' => $id));
		return;
		
	}
	public function countAll()
	{
		$qr = $this->db->select(" count(id) as totalnews ");
		$qr = $this->db->get($this->table);
		return $qr->first_row("array")['totalnews'];
	}
}

// class Newsmodel extends Basemodel{

// 	public function __construct()
// 	{
// 		parent::construct();
// 		$this->table = "tintuc";
// 	}
// }