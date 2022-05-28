<?php
	
	class Model_login extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function admin($nama_member, $password_member)
		{
            $this->load->database();
			$this -> db -> select('nama_member, password_member');
			$this -> db -> from('tbl_member');
			$this -> db -> where('nama_member', $nama_member);
			$this -> db -> where('password_member', $password_member);
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
		function member($kode_member, $password)
		{
            $this->load->database();
			$this -> db -> select('kode_member, password');
			$this -> db -> from('tbl_member');
			$this -> db -> where('kode_member', $kode_member);
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