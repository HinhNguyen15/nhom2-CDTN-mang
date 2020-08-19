<?php
defined('BASEPATH') OR exit('No direction script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view("backend/login");
	}
	public function login_f()
	{
		echo "xử lý đăng nhập";
		echo "<pre>";
		var_dump($_POST);
		$user["taikhoan"]=(isset($_POST["taikhoan"]))?$_POST["taikhoan"]:"";
		$user["matkhau"]=(isset($_POST["matkhau"]))?$_POST["matkhau"]:"";
		if($user["taikhoan"]!="" && $user["matkhau"]!="")
		{
			$user_db = $this->Usermodel->getByUsermane($user["taikhoan"]);
			echo "xử lý đăng nhập";
			echo "<pre>";
			var_dump($user_db);
			$pw = md5($user["matkhau"]);
			if($user_db["matkhau"] == $pw)
			{
				// $this->load->session();
				$this->session->set_Userdata("is_login", true);
				$this->session->set_Userdata("taikhoan", $user_db["taikhoan"]);
				$this->session->set_Userdata("phanquyen", $user_db["phanquyen"]);
				$this->session->set_Userdata("is_news_list", $user_db["is_news_list"]);
				$this->session->set_Userdata("is_news_admin_list", $user_db["is_news_admin_list"]);
				$this->session->set_Userdata("is_user_admin_list", $user_db["is_user_admin_list"]);
			}
			if($user_db["phanquyen"] == 1)
			{
				if(($user_db["is_news_list"] == 1) && ($user_db["is_news_admin_list"] == 1) && ($user_db["is_user_admin_list"] == 1))
				return redirect("/Newsad");
			}
			echo "Đăng nhập thất bại!!!";
			return redirect("/News");
		}
		return redirect("/login");
	}
	public function logout()
	{
		$this->session->sess_destroy();
		return redirect("/Login");
	}
}