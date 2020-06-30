<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Nyoba extends CI_Controller
{
	public function __construct () {
        parent::__construct();
        $this->load->model('model_blog');
        $this->load->model('comment_model');
    }
    public function index($id) {
        $data['lol'] = $this->model_blog->nyoba($id);
        $this->load->view('comment', $data);
    }

    function add_comment($id)
    {
        $data['news'] = $this->model_blog->nyoba($id);
        $this->form_validation->set_rules('comment_name', 'Name', 'required|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_email', 'Email', 'required|valid_email|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_body', 'comment_body', 'required|trim|htmlspecialchars');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect("blog/detail/$id");
        } else {
            $this->comment_model->add_new_comment();
            $this->session->set_flashdata('error_msg', 'Your comment is awaiting moderation.');
            redirect("blog/detail/$id");
        }
    }



}