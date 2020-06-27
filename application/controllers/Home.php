<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 06/25/2020
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index() {        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('home', $data);
    }
    public function about() {        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('about', $data);
    }
    public function contact() {        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('contact', $data);
    }
    public function service() {        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('service_detail', $data);
    }
}