<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once __DIR__."/Basecontroller.php";

class Tin_rao extends Basecontroller{

	public function __construct(){
		parent::__construct();
		// if(!$this->session->userData("is_login"))
		// 	redirect("login");
		if(!$this->session->userData("is_news_admin_list"))
				redirect("login");
	}

	public function index(){

		//lay ra danh sach tin tuc
		$this->load->model("Tinmodel");
		$data = array(
			"news_list"=> $this->Tinmodel->getAll(),
			"content" => "backend/tr/list");
		$this->load->view("/backend/layout",$data);
	}

	public function edit($id=""){
		if($id!=""){
			$this->load->model("Tinmodel");
			$news = $this->Tinmodel->getById($id);
			$data = array(
				"news"=> $news,
				"content" => "backend/tr/edit");
			$this->load->view("backend/layout",$data);
		}
	}

	// public function detailtr($id){
	// 	$this->load->model("Tinmodel");
	// 	$news=$this->Tinmodel->getById($id);
	// 	$data = array(
	// 		"content" =>"frontend/news/detail",
	// 		"news"=>$news
	// 	);
	// 	$this->load->view("frontend/layout",$data);
	// }


	public function save()
	{
		// echo "save user";
		// echo "<pre>";
		// var_dump($_POST);
		$news["Anh"]=(isset($_POST["Anh"]))?$_POST["Anh"]:"";
		$news["Tieude"]=(isset($_POST["Tieude"]))?$_POST["Tieude"]:"";
		$news["Dientich"]=(isset($_POST["Dientich"]))?$_POST["Dientich"]:"";
		$news["Diachi"]=(isset($_POST["Diachi"]))?$_POST["Diachi"]:"";
		if($news["Tieude"]!=""){

			if($this->Tinmodel->add($news))
				redirect("tin_rao","refresh");
			else 
				echo"thêm không thành công";
			return;

		}
		echo "chua co du lieu";
		return;
	}

	public function update($id=""){
		$news["id"] = $_POST["id"];
		$news["Anh"]=$_POST["Anh"];
		$news["Tieude"]=$_POST["Tieude"];
		$news["Dientich"]=$_POST["Dientich"];
		$news["Diachi"]=$_POST["Diachi"];
		// var_dump($_POST);

		// exit;
		if($id!="" && $news["Tieude"]!=""){
			if($this->Tinmodel->update($news))
				// redirect("Tin_rao","refresh");
				redirect("Tin_rao/index");
			// else
			// 	redirect("backend/tr/edit/".$news["id"]);
		}
		redirect("Tin_rao/index");
	}

	// public function insert(){
	// 	$data = array(
	// 		"content" => "backend/tr/edit/");
	// 	$this->load->view("backend/layout",$data);
	// }

	public function add(){

		$data=array(
		 	"content"=>"backend/tr/add"
		);
		return $this->load->view('backend/layout',$data);
		// $news["Anh"]=(isset($_POST["Anh"]))?$_POST["Anh"]:"";
		// $news["Tieude"]=(isset($_POST["Tieude"]))?$_POST["Tieude"]:"";
		// $news["Dientich"]=(isset($_POST["Dientich"]))?$_POST["Dientich"]:"";
		// $news["Diachi"]=(isset($_POST["Diachi"]))?$_POST["Diachi"]:"";
		
		// if($news["Tieude"]!=""){
		// 	//echo $news["tieude"];
		// 	if($this->Tinmodel->add($news))
		// 		//echo "thành công";
		// 		redirect("Tin_rao/index","refresh");
		// 	else
		// 		redirect("Tin_rao/insert","refresh");
		// 	return;
		// }
		// redirect("Tin_rao/insert","refresh");
		// return;
	}

	public function delete($id){
		if($id!=""){
			$this->Tinmodel->delete($id);
		}
		redirect("Tin_rao/index");
	}
}




























// <?php
// defined('BASEPATH') OR exit('No direction script access allowed');
// require_once __DIR__."/Basecontroller.php";

// class Tin_rao extends Basecontroller{
// 	public function __construct()
// 	{
// 		parent::__construct();
// 		// if(!$this->session->userData("is_login"))
// 		// 	redirect("login");
// 		if(!$this->session->userData("is_news_admin_list"))
// 				redirect("login");
// 	}


// 	public function index(){
// 		if(!$this->session->userData("is_news_admin_list"))
// 				redirect("login");
// 		else
// 		{
// 			$data=array(
// 			 	"content"=>"backend/tr/list",
// 				"new_list"=> $this->Tinmodel->getAll()
// 				);
// 			return $this->load->view('backend/layout',$data);
// 		}

// 	}
// 	public function add()
// 	{
// 		$data=array(
// 		 	"content"=>"backend/tr/add"
// 		);
// 		return $this->load->view('backend/layout',$data);
// 	}

	

// 	public function save()
// 	{
// 		// echo "save user";
// 		// echo "<pre>";
// 		// var_dump($_POST);
// 		$news["Anh"]=(isset($_POST["Anh"]))?$_POST["Anh"]:"";
// 		$news["Tieude"]=(isset($_POST["Tieude"]))?$_POST["Tieude"]:"";
// 		$news["Dientich"]=(isset($_POST["Dientich"]))?$_POST["Dientich"]:"";
// 		$news["Diachi"]=(isset($_POST["Diachi"]))?$_POST["Diachi"]:"";
// 		if($news["Tieude"]!=""){

// 			if($this->Tinmodel->add($news))
// 				redirect("Tin_rao","refresh");
// 			else 
// 				echo"thêm không thành công";
// 			return;

// 		}
// 		echo "chua co du lieu";
// 		return;
// 	}
	
// 	public function edit($id)
// 	{
// 		echo "edit".$id;
// 		$data= array(
// 			"news"=>$this->Tinmodel->getById($id),
// 			"content"=>"backend/tr/edit"
// 		);
// 		$this->load->view("backend/layout",$data);
// 	}
// 	public function update($id)
// 	{
// 		echo "update".$id;
// 		echo "<pre>";
// 		var_dump($_POST);
// 		$news["id"] = $_POST["id"];
// 		$news["Anh"] = $_POST["Anh"];
// 		$news["Tieude"] = $_POST["Tieude"];
// 		$news["Dientich"] = $_POST["Dientich"];
// 		$news["Diachi"] = $_POST["Diachi"];
// 		// var_dump($news);
// 		$this->Tinmodel->update($news);
// 		return redirect('/Tin_rao', 'refresh');
// 	}
// 	public function delete($id)
// 	{
// 		echo "delete".$id;
// 		$this->Newsmodel->delete($id);
// 		return redirect('/Tin_rao', 'refresh');
// 	}
//}