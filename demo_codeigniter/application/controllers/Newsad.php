<?php
defined('BASEPATH') OR exit('No direction script access allowed');
require_once __DIR__."/Basecontroller.php";

class Newsad extends Basecontroller{
	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userData("is_login"))
		// 	redirect("login");
		if(!$this->session->userData("is_news_admin_list"))
				redirect("login");
	}


	public function index(){
		if(!$this->session->userData("is_news_admin_list"))
				redirect("login");
		else
		{
			$data=array(
			 	"content"=>"backend/news/list",
				"new_list"=> $this->Newsmodel->getAll()
				);
			return $this->load->view('backend/layout',$data);
		}

	}
	public function add()
	{
		$data=array(
		 	"content"=>"backend/news/add"
		);
		return $this->load->view('backend/layout',$data);
	}

	

	public function save()
	{
		// echo "save user";
		// echo "<pre>";
		// var_dump($_POST);
		$news["tieude"]=(isset($_POST["tieude"]))?$_POST["tieude"]:"";
		$news["noidung"]=(isset($_POST["noidung"]))?$_POST["noidung"]:"";
		$news["anh"]=(isset($_POST["anh"]))?$_POST["anh"]:"";
		if($news["tieude"]!=""){

			if($this->Newsmodel->add($news))
				redirect("Newsad","refresh");
			else 
				echo"thêm không thành công";
			return;

		}
		echo "chua co du lieu";
		return;
	}
	
	public function edit($id)
	{
		//echo "edit".$id;
		$data= array(
			"news"=>$this->Newsmodel->getById($id),
			"content"=>"backend/news/edit"
		);
		$this->load->view("backend/layout",$data);
	}
	public function update($id)
	{
		echo "update".$id;
		echo "<pre>";
		var_dump($_POST);
		//$news["id"] = $id;
		$news["id"] =$_POST["tieude"];
		$news["tieude"] = $_POST["tieude"];
		$news["noidung"] = $_POST["noidung"];
		$news["anh"] = $_POST["anh"];
		// var_dump($news);
		$this->Newsmodel->update($news);
		//exit;
		return redirect('/Newsad', 'refresh');
	}
	public function delete($id)
	{
		echo "delete".$id;
		$this->Newsmodel->delete($id);
		return redirect('/Newsad', 'refresh');
	}
}