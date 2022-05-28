<?php
	
	class Model_admin extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function admin($username, $password)
		{
            $this->load->database();
			$this -> db -> select('username, password');
			$this -> db -> from('tbl_admin');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		
	}
?>