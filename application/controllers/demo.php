<?php
	if(!defined('BASEPATH'))
		exit('No direct ...');
		class Demo extends CI_Controller{
			public function __construct(){
				parent::__construct();
				$this->load->helper('url');
				$this->load->library('session');
			}

			public function index(){
				$data=array(
            	"username" => "Kaito",
            	"email" => "codephp2013@gmail.com",
            	"website" => "freetuts.net",
            	"gender" => "Male");
            	$this->session->set_userdata($data);
            	echo $this->session->userdata('gender');
			}
			public function co_tham_so($param1, $param2){
				echo "Tham số truyền vào của bạn là: ".$param1. ", ".$param2;
			}
			public function test_css_js(){
				$this->load->view('demo_css_js');
			}
		} 
 ?>