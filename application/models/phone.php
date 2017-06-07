<?php 
	class Phone extends CI_Model{
		public $id,$name,$unit_price,$description;
		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();
		}
		//liệt kê tất cả các sản phẩm trong csdl
		public function list_all(){
			$qr = $this->db->get('phone');
			return $qr->result_array();
		}
		//liệt kê các sp có id có sẵn
		public function get_product_by_id($id){
			$qr = $this->db->get_where('phone',array('id'=>$id));
			return $qr->result_array();
		}
	}
 ?>