<?php
require_once __DIR__ . "/Basemodel.php";

class Newsmodel extends Basemodel{
	public $table = "tintuc";
	public function searchNews($key_search)
	{
		$qr=$this->db->query("SELECT * FROM tintuc WHERE tieude like '%".$key_search."%'");
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
		$qr=$this->db->get($this->table);
		if($qr->num_rows())
			return $qr->result_array();
		return array();
	}
	// public function __construct()
	// {
	// 	parent::construct();
	// 	$this->table = "tintuc";
	// }
	// public function getById($id){
	// 	$qr=$this->db->query('SELECT * FROM tintuc  WHERE id = '.$id);
	// 	$news=$qr->first_row("array");

	// 	return $news;
	// }
	// public function add($news){
	// 	$qr=$this->db->query("INSERT INTO tintuc(tieude,noidung) VALUES ('".$news['tieude']."','".$news['noidung']."')");
	// 	echo $qr;
	// }
	// public function getAll(){
	// 	$qr=$this->db->query('SELECT * FROM tintuc');
	// 	$news = $qr->result_array("array");
	// 	return $news;
	// }
	// public function update($news)
	// {
	// 	$this->db->where('id', $news["id"]);
	// 	$this->db->update('tintuc', $news);
	// 	return;
	// }
	// public function delete($id)
	// {
	// 	$this->db->delete('tintuc', array('id' => $id));
	// 	return;
		
	// }
}