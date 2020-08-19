<?php
defined('BASEPATH') OR exit('No direction script access allowed');


class Home extends CI_Controller{
	public function index(){
		$this->load->helper('url');
		$data=array(
			"name"=>"",
			"class"=>"k66",
			"content"=>"home_index"
		);
		//echo "thu";
		 return $this->load->view("layout",$data);
		//return $this->load->view('frontend/layout', $data);
	}
	public function other($id = ""){
		$data=array(
			"content"=>"welcome_message");
		$this->load->view("layout",$data);
		return 0;

	}
}
?>