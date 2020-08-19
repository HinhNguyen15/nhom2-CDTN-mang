<?php
defined('BASEPATH') OR exit('No direction script access allowed');
require_once __DIR__."/Basecontroller.php";

class User_admin extends Basecontroller
{
	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userData("is_login"))
		// 	redirect("login");
		if(!$this->session->userData("is_user_admin_list"))
				redirect("login");
	}
	public function index()
	{
		$data=array(
		 	"content"=>"backend/user/list",
			"users_list"=> $this->Usermodel->getAll()
			);
		return $this->load->view('backend/layout',$data);
	}
	public function add()
	{
		echo "add user";
		$data=array(
		 	"content"=>"backend/user/add"
		);
		return $this->load->view('backend/layout',$data);
	}
	public function save()
	{
		echo "save user";
		echo "<pre>";
		var_dump($_POST);
		$user["taikhoan"]=(isset($_POST["taikhoan"]))?$_POST["taikhoan"]:"";
		$user["matkhau"]=(isset($_POST["matkhau"]))?$_POST["matkhau"]:"";
		$user["phanquyen"]=(isset($_POST["phanquyen"]))?$_POST["phanquyen"]:"";
		if($user["taikhoan"]!="" && $user["matkhau"]!=""){
			if($this->Usermodel->add($user))
			{
				redirect("User_admin","refresh");
				echo "thêm thành công";
			}
			else
				echo"thêm không thành công";
			return;

		}
		echo "chua co du lieu";
		return;
	}
	public function edit($id)
	{
		echo "edit user";
		$data=array(
			"user"=>$this->Usermodel->getById($id),
		 	"content"=>"backend/user/edit"
		);
		return $this->load->view('backend/layout',$data);
	}
	public function update($id)
	{
		echo "update user";
		echo "<pre>";
		var_dump($_POST);
		$user["id"]=(isset($_POST["id"]))?$_POST["id"]:"";
		$user["taikhoan"]=(isset($_POST["taikhoan"]))?$_POST["taikhoan"]:"";
		$user["matkhau"]=(isset($_POST["matkhau"]))?$_POST["matkhau"]:"";
		$user["phanquyen"]=(isset($_POST["phanquyen"]))?$_POST["phanquyen"]:"";
		$this->Usermodel->update($user);
		return redirect("/User_admin");
	}
	public function delete($id)
	{
		$this->Usermodel->delete($id);
		return redirect("/User_admin");
	}
	
}