<?php
defined('BASEPATH') OR exit('No direction script access allowed');


class TTin_rao extends CI_Controller{
	public function index(){
		$this->load->database();
		$query=$this->db->query("SELECT * FROM tin_rao ");
		$new=$query->result_array("array");
		$data = array(
			"content" =>"frontend/tinrao/index",
			"news"=>$new
		);
		$this->load->view("frontend/layout",$data);
	

	}

	//Phân trang
	public function list($p =1){
		//$this->load->database();
		//$qr = $this->db->query("select * from tintuc limit 10");
		//$news_list = $qr->result_array();
		$news_list=$this->Tinmodel->getAll(4,2*($p-1));
		$data=array(
			"content"=>"frontend/tinrao/list",
			"news_list" =>$news_list
		);
		$this->load->view("frontend/layout",$data);
	}

	// public function list(){
	// 	//echo "news/list";
	// 	$this->load->database();
	// 	$query=$this->db->query("SELECT * FROM tin_rao order By id");
	// 	//$qr=$this->db->query('select *from tin_rao');
	// 	$new=$query->result_array("array");
	// 	$data = array(
	// 		"content" =>"frontend/tinrao/list",
	// 		"news"=>$new
	// 	);
	// 	$this->load->view("frontend/layout",$data);


	// }
	public function detail($id){
		$this->load->model("tinmodel");
		$news=$this->Tinmodel->getById($id);
		$data = array(
			"content" =>"frontend/tinrao/detail",
			"news"=>$news
		);
		$this->load->view("frontend/layout",$data);
	}

	

	public function search($search = "")
	{
		$search = isset($_GET['search'])? $_GET['search']:"";
		$news=$this->Tinmodel->search($search);
		$data = array(
			"content" =>"frontend/tinrao/search",
			"news"=>$news
		);
		$this->load->view("frontend/layout",$data);
	}
	public function pagination($page)
	{

		$news=$this->Tinmodel->pagination($page);
		$data = array(
			"content" =>"frontend/tinrao/search",
			"news"=>$news,
			"totalnews" => $this->Tinmodel->countAll()
		);
		$this->load->view("frontend/layout",$data);

	}




}
