<?php

class Model_project extends CI_Model {

	    function detail_project()
	    {
			return $this->db->get('project')->result_array();
	    }

	    public function getAll()
	    {
	        return $this->db->get('project')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('project', $data);
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('project', $data, array('id_pro' => $id));
	    }

	    public function delete($id)
	    {
	        $this->db->delete('project', array('id_pro' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('project', array('id_pro' => $id))->row_array();
	    }

	    function nyoba($id)
	    {
	        $query = $this->db->get_where('project', array('id_pro' => $id));
			return $query->row_array();
	    }

	    function get_one($id)
	    {
	        $this->db->get_where('project', array('id_pro' => $id));
	        $query = $this->db->get('project');
	        return $query->row();
	    }

		public function dis_products1()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT kategori FROM project');
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM project");
	     	return $query->result();
    	}

    	public function atas3(){
	        $query = $this->db->query("SELECT * FROM project ORDER BY tanggal_pro DESC LIMIT 3");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('project');
    	}

    	public function getAr($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('project');

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

    	public function side(){
			$this->db->order_by('tanggal_pro','desc');
			return $this->db->get('project');
    	}

}