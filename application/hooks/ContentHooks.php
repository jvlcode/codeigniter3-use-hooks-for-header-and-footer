<?php 
	class ContentHooks extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function header_content(){
			echo '<h1 align="center">Welcome to the Website</h1>';
			//checking user logged in
			$this->load->library('session');
			
			if($this->session->has_userdata('is_user_logged')){
				echo 'User Logged in';
			}else{
				echo "<p align='center'>User not logged in</p>";
			}
		}

		public function footer_content(){
			echo '<p align="center">Copyright 2021</p>';
		}
	}
