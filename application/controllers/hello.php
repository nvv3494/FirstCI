<?php
	if(!defined('BASEPATH'))
		exit('No direct ...');
	/**
	* 
	*/
	class Hello extends CI_Controller
	{
		function __construct(){
			//goi ham khoi tao cua cha
			parent::__construct();
		}
		public function other()
		{
			# code...
			echo 'this is another function of Hello class';
		}
		public function index()
		{
			# code...
			# 
			$this->load->database();
			echo 'Welcome to first CI';
		}
		
		public function ham_co_bien($value='giatribien')
		{

			# code..
			echo "Gia tri bien la: ". $value;
		}
		public function ham_2_bien($var1 = 19, $var2 = 26){
			$sum = $var1 + $var2;
			echo "Tong la: ". $sum;
		}

	}
?>