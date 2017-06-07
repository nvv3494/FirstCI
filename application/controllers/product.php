<?php 
	class Product extends CI_Controller{
		public function index($page = ''){
			echo "<h1>Home page: </h1>";
			echo "Page: ".$page;
		}

		public function category($cate_slug = '',$page = ''){
			echo "<h1> Category page:  </h1>";
			echo "Slug: ".$cate_slug;
			echo "Page: ".$page;
		}
		public function tag($tag_slug = '',$page = ''){
			echo "<h1>Details page</h1>";
			echo "Slug: ".$tag_slug;
			echo "Page: ".$page;
		}
		public function detail($post_slug = '',$post_id = ''){
			echo "<h1>Detail Page</h1>";
			echo "Slug: ".$post_slug;
			echo "Post id: ".$post_id;
		}
		public function out_id($id){
			echo "Your id: ".$id;
		}
	}
 ?>