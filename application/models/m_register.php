<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
            $this->load->database();
			$this->db->insert('admin',$data);
		}
		
		public function isDuplicate($username1)
		{     
			$this->db->get_where('admin', array('username' => $username1), 1);
			return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
		}
	}
?>