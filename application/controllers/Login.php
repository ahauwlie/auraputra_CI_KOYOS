<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login extends CI_Controller {

    public function index()
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
                    $id_ug = $session['active'];
                    $id = $session['foto_adm'];
                    if($id_ug == 1){
                        redirect('home_admin','refresh');
                        // echo "$id";
                    }
                    else{
                        $this->session->unset_userdata('login');
                        echo "maaf id anda belum di aktifasi";
                        echo "<br><br><a href='".site_url("home")."'>Kembali ke Beranda</a>";
                    }
                }
                // echo "string";
            }
    }

    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('Home','refresh');
    }
}