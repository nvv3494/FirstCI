<?php 
	class BlogModel extends CI_Model{
		public $title;
		public $content;
		public $date;

		public function get_last_ten(){
			$query = $this->db->get('entries',10);
			return $query->result();
		}
		public function insert_entry(){
			$this->title = $_POST['title'];
			$this->content = $_POST['content'];
			$this->date = time();

			$this->db->insert('entries',$this);
		}
		public function update_entry(){
			$this->title = $_POST['title'];
			$this->content = $_POST['content'];
			$this->date = date();
			$this->db->update('entries',$this,array('id' => $_POST['id']));
		}

	}
 ?>