<?php 
	if(!defined('BASEPATH'))
		exit('No direct ...');
	class MyController extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->helper('my');
			$this->load->library(array('captcha','new'));
			
		}
		public function inid($id){
			echo "your id: ".$id;
		}
		//my_helper tu tao trong thu muc system/helpers/my_helper.php
		public function demo_helper(){
			indongchu('abcabcabc');
		}
		//new lib duoc tao trong thu muc system/library/new.php
		public function demo_lib(){
			$this->new->out_new('Ha Noi nang nong ki luc');
		}
		public function rounting($param)
		{
			# code..
			echo "demo running rewrite routing: ".$param;
		}
		public function number($num){
			echo $num;
		}
		public function regex($num){
			echo "number is ". $num;
		}
	}
 ?>