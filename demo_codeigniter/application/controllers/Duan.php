<?php
defined('BASEPATH') OR exit('No direction script access allowed');


class Duan extends CI_Controller{
	public function index(){
		$this->load->database();
		$qr=$this->db->query("SELECT * FROM tintuc order By id desc limit 4");
		$new=$qr->result_array("array");
		$data = array(
			"content" =>"frontend/da/index",
			"news"=>$new
		);
		$this->load->view("frontend/layout",$data);
		
	

	}
	//Phân trang
	public function list($p =1){
		//$this->load->database();
		//$qr = $this->db->query("select * from tintuc limit 10");
		//$news_list = $qr->result_array();
		$news_list=$this->Duanmodel->getAll(4,2*($p-1));
		$data=array(
			"content"=>"frontend/da/list",
			"news_list" =>$news_list
		);
		$this->load->view("frontend/layout",$data);
	}
	// public function list(){
	// 	//echo "news/list";
	// 	$this->load->database();
	// 	$query=$this->db->query("SELECT * FROM tintuc");
	// 	$new=$query->result_array("array");
	// 	$data = array(
	// 		"content" =>"frontend/news/list",
	// 		"news"=>$new
	// 	);
	// 	$this->load->view("frontend/layout",$data);


	// }
	public function detail($id){
		$this->load->model("Duanmodel");
		$news=$this->Duanmodel->getById($id);
		$data = array(
			"content" =>"frontend/da/detail",
			"news"=>$news
		);
		$this->load->view("frontend/layout",$data);
	}



	public function search($search = "")
	{
		$search = isset($_GET['search'])? $_GET['search']:"";
		$news=$this->Duanmodel->search($search);
		$data = array(
			"content" =>"frontend/da/search",
			"news"=>$news
		);
		$this->load->view("frontend/layout",$data);
	}
	public function pagination($page)
	{

		$news=$this->Duanmodel->pagination($page);
		$data = array(
			"content" =>"frontend/da/search",
			"news"=>$news,
			"totalnews" => $this->Duanmodel->countAll()
		);
		$this->load->view("frontend/layout",$data);

	}




}
