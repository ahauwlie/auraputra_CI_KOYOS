<?php

class user_manage extends CI_Model {
	
		 public function getAll()
	    {
	        return $this->db->get('admin')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('admin', $data);
	    }

	    public function delete($id)
	    {
	        $this->db->delete('admin', array('id_adm' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('admin', array('id_adm' => $id))->row_array();
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('admin', $data, array('id_adm' => $id));
	    }	

	    public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM admin");
	     	return $query->result();
    	}

    	public function upload(){
		    $config['upload_path'] = './inti/img/upload/';
		    $config['allowed_types'] = 'jpg|png|jpeg|gif';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		  
		    $this->load->library('upload', $config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		}

		public function save($upload){
			if($this->session->admindata('login')) {
	        	$id = $this->session->admindata['login']['id_adm'];
			    $data = array(
			    	'id_adm' => $id,
			    	'foto_adm' => $upload['file']['file_name'],
			    );
			    // $this->db->update('admin', $data);
			    $this->db->update('admin', $data, array('id_us' => $id));
			}
		}
}