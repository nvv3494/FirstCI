<?php 
	class Page extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		public function index(){

			$query = $this->db->query("select * from user");
			$data = $query->result_array();
			//print_r($data);
			
			$config['total_rows'] = sizeof($data);
			$config['base_url'] = base_url()."index.php/page/index";
			$config['per_page'] = 3;
			$config['num_links'] = 10;
			$this->load->library('pagination',$config);	//library phan trang
			print_r($data);
			echo "<div>".$this->pagination->create_links()."</div>";
			
		}
	}
 ?>