<?php
	if(!defined('BASEPATH'))
		exit('No direct ...');
	class Login extends CI_Controller{
		public function load_form(){
			//$this->load->view('login_view');
			//$this->load->view('admin/trangchu');
			//$var = $this->load->view('login_view.php','',true);
			//echo $var;
		}
		public function sendData(){
			$data = array('title' => 'Đây là trang login' , 'content' => 'Nhập thông tin người sử dụng');
			$this->load->view('login_view',$data);
		}
	}
?>