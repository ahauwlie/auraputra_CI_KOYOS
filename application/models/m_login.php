<?php
	
	class M_login extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function login($username, $password)
		{
            $this->load->database();
			$this -> db -> select('*');
			$this -> db -> from('admin');
			$this -> db -> where('username', $username);
			
			$query = $this -> db -> get();
			$user = $query->result();
			
			if(!empty($user))
			{
				if(verifyHashedPassword(md5($password), $user[0]->password)){
					return $user;
				} else {
		            return false;
		        }
			}
			else
			{
				return false;
			}
		}
		
	}
?>