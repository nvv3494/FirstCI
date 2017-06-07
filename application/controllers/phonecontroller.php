<?php 
class PhoneController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('cart');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	public function getList(){
		/*
		$query = $this->db->query('select * from phone');
		$data = $query->result_array();
		*/
		$this->load->model('Phone');
		$data = $this->Phone->list_all();
		$this->load->view('/demo_cart/list_product',array('listdt'=>$data));
	}
		//them sp có id = $id vao cart
	public function add_to_cart($id){
		/*
		$qr = $this->db->get_where('phone',array('id'=>$id));
		$data = $qr->result_array();
		*/
			//$this->load->view('/demo_cart/add_to_cart',array('product' => $data));
		$this->load->model('Phone');
		$data = $this->Phone->get_product_by_id($id);
		if(count($data) > 0){
			foreach ($data as $key => $value) {
				# code...
				$phone = array(
					'id'=>$value['id'],
					'qty'=>1,
					'price'=>$value['unit_price'],
					'name'=>$value['name'],
					'option'=>$value['description']
					);
			}
			$this->cart->insert($phone);
			echo 'thêm thành công';
		}
		else{
			echo 'thêm thất bại';
		}
		//$this->cart->destroy();
		$this->load->view('/demo_cart/list_product',array('listdt'=>$this->db->get('phone')->result_array()));
		redirect(base_url().'/list');

	}

	public function delete_from_cart($id){
			//$this->load->view('demo_cart/delete',array('id'=>$id));
			//echo "ID của sp muốn xóa: ".$id;	
		$cart = $this->cart->contents();
		foreach ($cart as $key => $value) {
					# code..
			if($value['id'] == $id)
			{
				$arr = array(
					'rowid' => $key,
					'qty' => 0
					);
				
				$this->cart->update($arr);
				break;
			}
		}
		$this->load->view('/demo_cart/list_product',array('listdt'=>$this->db->get('phone')->result_array()));
		redirect(base_url().'/list');
	}
}
?>