<?php
require_once __DIR__ . "/Basemodel.php";

class Usermodel extends Basemodel{
	public $table = "taikhoan";
	public function getByUsermane($username)
	{
 		// $qr = $this->db->query("SELECT * FROM taikhoan WHERE taikhoan = '$username'");
 		$qr = $this->db->query("SELECT taikhoan.*,quyentruycap.name, quyentruycap.is_news_list,quyentruycap.is_news_admin_list, quyentruycap.is_user_admin_list  FROM taikhoan INNER JOIN quyentruycap ON taikhoan.phanquyen = quyentruycap.id WHERE taikhoan = '$username'");
 		$users = $qr->first_row("array");
 		return $users;
	}


	//Lấy 1 tin tức theo id trả về dưới dạng mảng
	// public function getByid($id){
	// 	 $this->load->database();
 // 		 $qr = $this->db->query("SELECT * FROM taikhoan WHERE id = $id ");
 // 		 $users = $qr->first_row("array");
 // 		 return $users;
	// } 
	// public function add($users){
	// 	// $qr = $this->db->query("insert into taikhoan (tieude,noidung)
	// 	// 	values('".$users['tieude']."','".$users['noidung']."')" );
	// 	// echo $qr;
	// 	if($this->db->insert("taikhoan",$users))
	// 		return true;
	// 	return false;
	// }
	// public function getAll($limit=10,$offset=0){
	// 		$qr = $this->db->select("*");
	// 		$qr = $this->db->limit($limit,$offset);
	// 		$qr = $this->db->order_by("id","desc");
	// 		$qr = $this->db->get("taikhoan");
	// 		// echo $this->db->num_rows()
	// 		if($qr->num_rows()){
	// 			return $qr->result_array();

	// 		}
	// 		return array();
	// }

	// public function update($users)
	// {
	// 	$this->db->where('id', $users["id"]);
	// 	$this->db->update('taikhoan', $users);
	// 	return;
	// }
	// public function delete($id)
	// {
	// 	$this->db->delete('taikhoan', array('id' => $id));
	// 	return;
		
	// }
}
?>