<?php
defined('BASEPATH') OR exit('No direction script access allowed');

class Basecontroller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userData("is_login"))
			return redirect("login");
		//lấy ra các id của bảng phân quyền, check ko có giá trị thì redirect sang bảng
		if(!$this->session->userData("phanquyen"))
		{
			return redirect("login");
		}
		// else if($this->session->userData("phanquyen") == 2)
		// {

		// }
		// if($this->session->userData("phanquyen") != 2)
		// {
		// 	return redirect("News/"); 
		// }
	}
}
