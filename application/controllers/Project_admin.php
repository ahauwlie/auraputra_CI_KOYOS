<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_project');
    }

    public function index() {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
                $data['project'] = $this->model_project->getAll();
                $this->load->view('admin/project/index', $data);
            }
        }
    }

    public function addproject()
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $config['upload_path']   = './inti/img/upload/'; 
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $config['max_size']      = 10240;
                    $location = base_url().'inti/img/upload/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $uploadedImage = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict = $location.$uploadedImage['file_name'];
                    }
                    if ($this->upload->do_upload('image2')) {
                        $uploadedImage2 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict2 = $location.$uploadedImage2['file_name'];
                    }
                    if ($this->upload->do_upload('image3')) {
                        $uploadedImage3 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict3 = $location.$uploadedImage3['file_name'];
                    }
                    if ($this->upload->do_upload('image4')) {
                        $uploadedImage4 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict4 = $location.$uploadedImage4['file_name'];
                    }
                    $this->load->helper(array('form', 'url'));

                    if($this->input->post('foto') == NULL || $this->input->post('foto2') == NULL || $this->input->post('foto3') == NULL || $this->input->post('foto4') == NULL){
                        $data = Array (
                            'kategori_pro' => $this->input->post('kategori'),
                            'judul_pro' => $this->input->post('judul'),
                            'mini_text_pro' => $this->input->post('mini_text'),
                            'tanggal_pro' => $this->input->post('tanggal'),
                            'id_adm' => $this->input->post('id_adm'),
                            'nama_client_pro' => $this->input->post('nama_client'),
                            'lokasi_pro' => $this->input->post('lokasi'),
                            'img_1_pro' => $pict,
                            'img_2_pro' => $pict2,
                            'img_3_pro' => $pict3,
                            'img_4_pro' => $pict4,
                            'isi_pro' => $this->input->post('isi')
                        );
                    }
                    else{
                        $data = Array (
                            'kategori_pro' => $this->input->post('kategori'),
                            'judul_pro' => $this->input->post('judul'),
                            'mini_text_pro' => $this->input->post('mini_text'),
                            'tanggal_pro' => $this->input->post('tanggal'),
                            'id_adm' => $this->input->post('id_adm'),
                            'nama_client_pro' => $this->input->post('nama_client'),
                            'lokasi_pro' => $this->input->post('lokasi'),
                            'img_1_pro' => $this->input->post('foto'),
                            'img_2_pro' => $this->input->post('foto2'),
                            'img_3_pro' => $this->input->post('foto3'),
                            'img_4_pro' => $this->input->post('foto4'),
                            'isi_pro' => $this->input->post('isi')
                        );
                    }                    

                    $this->model_project->insert(html_escape($data), false);
                    redirect(site_url("project_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);

                    $this->load->view('admin/project/add_barang', $data);
                }
            }
        }
    }

    public function resizeImage($filename){
      $source_path = $_SERVER['DOCUMENT_ROOT'] . './inti/img/upload/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . './inti/img/upload/';
        $config_manip = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'create_thumb' => TRUE,
            'thumb_marker' => '',
            'width' => '1920',
            'height' => '1080'
        );

        $this->load->library('image_lib', $config_manip);
        

        if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
        }

        $this->image_lib->clear();
    }

    public function delete($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $this->model_project->delete($id);
                }
                redirect(site_url('project_admin/index'));
            }
        }
    }

    public function edit($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $data = Array (
                        'id_pro' => $id,
                        'kategori_pro' => $this->input->post('kategori'),
                        'judul_pro' => $this->input->post('judul'),
                        'mini_text_pro' => $this->input->post('mini_text'),
                        'tanggal_pro' => $this->input->post('tanggal'),
                        'id_adm' => $this->input->post('id_adm'),
                        'nama_client_pro' => $this->input->post('nama_client'),
                        'lokasi_pro' => $this->input->post('lokasi'),
                        'img_1_pro' => $this->input->post('foto'),
                        'img_2_pro' => $this->input->post('foto2'),
                        'img_3_pro' => $this->input->post('foto3'),
                        'img_4_pro' => $this->input->post('foto4'),
                        'isi_pro' => $this->input->post('isi')
                    );

                    $this->model_project->update(html_escape($data), $id, false);
                    redirect(site_url("project_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
                    $data['project'] = $this->model_project->getSpecified($id);
                    $this->load->view('admin/project/edit_barang', $data);
                }
            }
        }
    }

    public function detail($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);

                $data['project'] = $this->model_project->getSpecified($id);
                $this->load->view('admin/project/detail_barang', $data);
            }
        }
    }

}