<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
    $this->load->helper('form');
    $this->load->view('auth/register');
  }
  
  public function submit(){

    $config['upload_path']   = './inti/img/upload/'; 
    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
    $config['max_size']      = 1024;
    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('image')) {
      $error = array('error' => $this->upload->display_errors()); 
      $this->load->view('auth/register', $error); 
    }
    else { 
      $uploadedImage = $this->upload->data();
      $this->resizeImage($uploadedImage['file_name']);
    }  

    //passing post data dari view

    $this->load->helper(array('form', 'url'));

    $data_image = $this->upload->data();
    $location = base_url().'inti/img/upload/';
    $pict = $location.$data_image['file_name'];

    $username1 = $this->input->post('username');
    $password = $this->input->post('password');
    $pass = md5($password);
    $nama = $this->input->post('nama_adm');
    $moto = $this->input->post('moto_adm');
    $wa = $this->input->post('whatsapp');
    $ig = $this->input->post('instagram');
    $fb = $this->input->post('facebook');
    $tw = $this->input->post('twitter');
    $yt = $this->input->post('youtube');
    
    //memasukan ke array
    $data = array(
      'username' => $username1,
      'password' => getHashedPassword($pass),
      'nama_adm' => $nama,
      'foto_adm' => $pict,
      'moto_adm' => $moto,
      'whatsapp' => $wa,
      'instagram' => $ig,
      'facebook' => $fb,
      'twitter' => $tw,
      'youtube' => $yt,
      'active' => 0
    );
    //tambahkan akun ke database
    $this->load->model('m_register', 'user_model', TRUE);
    if($this->user_model->isDuplicate($this->input->post('username'))){
            echo "Username telah digunakan";
        }
    else
    {
      $this->user_model->add_account($data);
      echo "Selamat, Kamu bagian dari kami sekarang <br> lakukan activasi akun <a href='https://wa.me/089514055817?text=activasi%20akun%20*%20$nama%20*%20dengan%20email%20*%20$username1%20*'>disini!</a>";
      echo "<br>foto berhasil di upload.<br>Lokasi <i><sup>$pict</sup></i>";
      echo "<br><br><a href='".site_url("home")."'>Kembali ke Beranda</a>";
    }
  }

  public function resizeImage($filename){
    $source_path = $_SERVER['DOCUMENT_ROOT'] . './inti/img/upload/' . $filename;
    $target_path = $_SERVER['DOCUMENT_ROOT'] . './inti/img/upload/';
    $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          // 'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 'auto',
          'height' => 120
      );

    $this->load->library('image_lib');
    $this->image_lib->initialize($config_manip); 
    $this->image_lib->clear();      

    if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
    }
  }

}

