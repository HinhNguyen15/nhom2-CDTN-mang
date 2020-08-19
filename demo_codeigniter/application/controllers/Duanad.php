<?php
defined('BASEPATH') OR exit('No direction script access allowed');
require_once __DIR__."/Basecontroller.php";

class Duanad extends Basecontroller{
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
			 	"content"=>"backend/da/list",
				"new_list"=> $this->Duanmodel->getAll()
				);
			return $this->load->view('backend/layout',$data);
		}

	}
	public function add()
	{
		$data=array(
		 	"content"=>"backend/da/add"
		);
		return $this->load->view('backend/layout',$data);
	}

	

	public function save()
	{
		// echo "save user";
		// echo "<pre>";
		// var_dump($_POST);
		$news["anh"]=(isset($_POST["anh"]))?$_POST["anh"]:"";
		$news["tieude"]=(isset($_POST["tieude"]))?$_POST["tieude"]:"";
		
		if($news["tieude"]!=""){

			if($this->Duanmodel->add($news))
				redirect("Duanad","refresh");
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
			"news"=>$this->Duanmodel->getById($id),
			"content"=>"backend/da/edit"
		);
		$this->load->view("backend/layout",$data);
	}
	public function update($id)
	{
		// echo "update".$id;
		// echo "<pre>";
		// var_dump($_POST);
		$news["id"] = $_POST["id"];
		$news["anh"] = $_POST["anh"];
		$news["tieude"] = $_POST["tieude"];

		// var_dump($news);
		$this->Duanmodel->update($news);
		return redirect('/Duanad', 'refresh');
	}
	public function delete($id)
	{
		echo "delete".$id;
		$this->Duanmodel->delete($id);
		return redirect('/Duanad', 'refresh');
	}
}