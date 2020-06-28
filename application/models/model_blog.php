<?php

class Model_blog extends CI_Model {

	    function detail_blog()
	    {
			return $this->db->get('blog')->result_array();
	    }

	    public function getAll()
	    {
	        return $this->db->get('blog')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('blog', $data);
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('blog', $data, array('id_blog' => $id));
	    }

	    public function delete($id)
	    {
	        $this->db->delete('blog', array('id_blog' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('blog', array('id_blog' => $id))->row_array();
	    }

	    function nyoba($id)
	    {
	        $query = $this->db->get_where('blog', array('id_blog' => $id));
			return $query->row_array();
	    }

	    function get_one($id)
	    {
	        $this->db->get_where('blog', array('id_blog' => $id));
	        $query = $this->db->get('blog');
	        return $query->row();
	    }

		public function dis_products1()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT kategori FROM blog');
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM blog");
	     	return $query->result();
    	}

    	public function atas3(){
	        $query = $this->db->query("SELECT * FROM blog ORDER BY tanggal_blog DESC LIMIT 3");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('blog');
    	}

    	public function getAr($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('blog');

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

    	public function side(){
			$this->db->order_by('tanggal_blog','desc');
			return $this->db->get('blog');
    	}

}