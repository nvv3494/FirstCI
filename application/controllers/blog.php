<?php 
	class Blog extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			//$this->load->view('blogview');
			/*
			$data['todolist'] = array('clean house','cooking rice','do homework','play game','football');
			$data['title'] = 'My real title';
			$data['heading'] = 'My real heading';
			$this->load->view('blogview',$data);
			*/
		/*
			$data['todolist'] = array('clean house','cooking rice','do homework','play game','football');
			$data['title'] = 'My real title';
			$data['heading'] = 'My real heading';
			$this->load->helper(array('file','email','xml'));
			$this->load->view('blogview',$data);
		*/
			/*
			$date = "Nam: %Y, Thang: %m, Ngay: %d.";
			$time = time();
			echo mdate($date,$time);
			*/
			$this->captcha->demo_captcha();
		}
		/*
		public function blog(){
			$this->load->model('blogmodel');
			$this->load->helper('url');
			$this->load->helper(array('file','email','xml'));
			$this->load->view('blogview');
		}
		*/
	}
 ?>