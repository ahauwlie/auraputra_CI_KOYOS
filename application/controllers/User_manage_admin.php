<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_manage_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('user_manage');
  }
  
  public function index(){
    $this->load->library('session');
    $this->load->helper('url');
    //jika seasson login belum ada maka tampilkan login
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login2');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data['user'] = $this->user_manage->getAll();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
        $this->load->view('admin/user/view_user', $data);
      }
    }
  }

  public function addUser()
    {
      $this->load->library('session');
      $this->load->helper('url');
      //jika seasson login belum ada maka tampilkan login
      if(!$this->session->userdata('login')){
        $this->load->helper('form');
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          if ($_SERVER['REQUEST_METHOD'] == "POST")
          {
              $password = $this->input->post('pass');
              $pass = md5($password);

              // buat foto nih
              $config['upload_path']   = './inti/images/upload/'; 
              $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
              $config['max_size']      = 10240;
              $this->load->library('upload', $config);

              if ($this->upload->do_upload('image')) {
                $uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name']); 
              }

              $this->load->helper(array('form', 'url'));
              $data_image = $this->upload->data();
              $location = base_url().'inti/images/upload/thumb/';
              $pict = $location.$data_image['file_name'];

              if( ! $this->input->post('foto')){
                $data = Array (
                  'username' => $this->input->post('uname'),
                  'password' => getHashedPassword($pass),
                  'nama_adm' => $this->input->post('fnama'),
                  'foto_adm' => $pict,
                  'moto_adm' => $this->input->post('moto'),
                  'whatsapp' => $this->input->post('wa'),
                  'instagram' => $this->input->post('ig'),
                  'facebook' => $this->input->post('fb'),
                  'twitter' => $this->input->post('tw'),
                  'youtube' => $this->input->post('yt'),
                  'active' => $this->input->post('active')
                );
              }else{
                $data = Array (
                  'username' => $this->input->post('uname'),
                  'password' => getHashedPassword($pass),
                  'nama_adm' => $this->input->post('fnama'),
                  'foto_adm' => $this->input->post('foto'),
                  'moto_adm' => $this->input->post('moto'),
                  'whatsapp' => $this->input->post('wa'),
                  'instagram' => $this->input->post('ig'),
                  'facebook' => $this->input->post('fb'),
                  'twitter' => $this->input->post('tw'),
                  'youtube' => $this->input->post('yt'),
                  'active' => $this->input->post('active')
                );
              }

              

              $this->user_manage->insert(html_escape($data), false);
              redirect(site_url("User_manage_admin/index"));
          }
          else
          {
              $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
              $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
              $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
              $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);

              $this->load->view('admin/user/add_user', $data);
          }
        }
      }
    }

    public function resizeImage($filename){
      $source_path = $_SERVER['DOCUMENT_ROOT'] . './inti/images/upload/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . './inti/images/upload/thumb/';
        $config_manip = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'create_thumb' => TRUE,
            'thumb_marker' => '',
            'width' => 'auto',
            'height' => 120
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
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
              $this->user_manage->delete($id);
          }
          redirect(site_url('User_manage_admin/index'));
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
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          if ($_SERVER['REQUEST_METHOD'] == "POST")
          {
              $password = $this->input->post('pass');
              $pass = md5($password);
              
              // buat foto nih
              $config['upload_path']   = './inti/images/upload/'; 
              $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
              $config['max_size']      = 10240;
              $this->load->library('upload', $config);

              if ($this->upload->do_upload('image')) {
                $uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name']); 
              }

              $this->load->helper(array('form', 'url'));
              $data_image = $this->upload->data();
              $location = base_url().'inti/images/upload/thumb/';
              $pict = $location.$data_image['file_name'];

              if( ! $this->input->post('foto')){
                $data = Array (
                  'id_adm' => $id,
                  'username' => $this->input->post('uname'),
                  'password' => getHashedPassword($pass),
                  'nama_adm' => $this->input->post('fnama'),
                  'foto_adm' => $pict,
                  'moto_adm' => $this->input->post('moto'),
                  'whatsapp' => $this->input->post('wa'),
                  'instagram' => $this->input->post('ig'),
                  'facebook' => $this->input->post('fb'),
                  'twitter' => $this->input->post('tw'),
                  'youtube' => $this->input->post('yt'),
                  'active' => $this->input->post('active')
                );
              }else{
                $data = Array (
                  'id_adm' => $id,
                  'username' => $this->input->post('uname'),
                  'password' => getHashedPassword($pass),
                  'nama_adm' => $this->input->post('fnama'),
                  'foto_adm' => $this->input->post('foto'),
                  'moto_adm' => $this->input->post('moto'),
                  'whatsapp' => $this->input->post('wa'),
                  'instagram' => $this->input->post('ig'),
                  'facebook' => $this->input->post('fb'),
                  'twitter' => $this->input->post('tw'),
                  'youtube' => $this->input->post('yt'),
                  'active' => $this->input->post('active')
                );
              }

              $this->user_manage->update(html_escape($data), $id, false);
              redirect(site_url("User_manage_admin/index"));
          }
          else
          {
              $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
              $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
              $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
              $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
              $data['user'] = $this->user_manage->getSpecified($id);
              $this->load->view('admin/user/edit_user', $data);
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
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
          $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
          $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
          $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
          $data['user'] = $this->user_manage->getSpecified($id);
          $this->load->view('admin/user/detail_user', $data);
        }
      }
    }
}