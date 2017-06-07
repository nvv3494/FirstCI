<?php
	if(!defined('BASEPATH'))
		exit('No direct ...');
		class User extends CI_Controller{
			public function __construct(){
				parent::__construct();
				$this->load->database();
			}
			public function index(){
				/*
				$query = $this->db->get('user');
				$data = $query->row_array();
				/*
				foreach ($query as $key => $value) {
					# code...
					echo $key. ": ".$value."<br>";
				}
				*/
				$this->db->select('id,username,level');
				$query = $this->db->get('user');
				$data = $query->result_array();
				echo "<pre>";
				print_r($data);
				echo "</pre>";
			}
		}
 ?>