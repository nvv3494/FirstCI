<?php 
	class ShoppingCart extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('cart');
			$this->load->helper('url');
			
		}
		public function index(){
			$data = array(
				'id'=> '4',
				'qty'=>0,
				'price'=>50000,
				'name'=>'Rice',
				'option'=>'ngon'
				);
			$this->cart->update($data);
			echo "Them thanh cong";
			$products = $this->cart->contents();
			$this->load->view('listcart',$products);
		}
		public function update(){
			$data = $this->cart->contents();
			foreach ($data as $key => $value) {
				# code...
				if($value['id'] == '4'){
					$new_data = array('rowid'=>$key, 'qty'=>'1994');
					$this->cart->update($new_data);
					break;
				}
				
			}
			$this->load->view('listcart',$this->cart->contents());
			}
		}
 ?>