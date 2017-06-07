<?php
	if(!defined('BASEPATH'))
		exit('No direct ...');
	class NewPerson extends CI_Controller
	{
		public function newList(){
			//load Model
			//khi khai bao Person la model mac dinh, ta khong can load no ra nua
			//$this->load->model('person');
			//goi ham trong Model
			$new_list = $this->person->getList();
		}
	} 
?>
