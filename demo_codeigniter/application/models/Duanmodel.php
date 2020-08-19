<?php 
require_once __DIR__."/Basemodel.php";

class Duanmodel extends Basemodel{
 public $table = "duan";
 public function search($dt, $limit = 10, $offset = 0)
 	{
		$qr=$this->db->query("SELECT * FROM duan WHERE Tieude like '%".$dt."%'");
		// $query = "SELECT * FROM tintuc WHERE tieude like '%".$key_search."%'";
		$news = $qr->result_array("array");
		// echo var_dump($news);
		return $news;
	}
	public function pagination($page = 1)
	{
		$page = (isset($page)&& $page > 0)? $page: 1;
		$limit = 2;
		$offset = $limit*$page - 1;
		$qr=$this->db->select("*");
		$qr=$this->db->limit($limit,$offset);
		$qr=$this->db->order_by("id","desc");
		$qr = $this->db->like('anh',$qt);
	 	$qr = $this->db->like('tieude',$qt);
		$qr=$this->db->get($this->table);
		if($qr->num_rows())
			return $qr->result_array();
		return array();
	}
 	//return $this->db->query("select * from tintuc where tieude like '%" $qt"%'")->result_array();


 	// $qr= $this->db->select("*");
 	// $qr = $this->db->limit($limit, $offset);
 	// $qr = $this->db->order_by('id','ASC');
 	// $qr = $this->db->like('Anh',$qt);
 	// $qr = $this->db->like('Tieude',$qt);
 	// $qr = $this->db->or_like('Dientich',$qt);
 	// $qr = $this->db->like('Diachi',$qt);


 	// $qr = $this->db->get($this->table);
 	// if ($qr->num_rows()) {
 	// 	return $qr->result_array();
 	// }return array();

 	
	
}