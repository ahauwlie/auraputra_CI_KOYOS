<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 06/25/2020
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_blog');
        $this->load->library('pagination');
        $this->load->model('comment_model');
    }
    public function index() { 
        $config = array();
        $config["base_url"] = base_url() . "Blog/index";
        $config["total_rows"] = $this->model_blog->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['blog'] =  $this->model_blog->getAr($config["per_page"], $page);       
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('blog', $data);
    }
    public function detail($id) {        
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $data['lol'] = $this->model_blog->nyoba($id);
        $data['comments'] = $this->show_tree($id);
        $this->load->view('blog_detail', $data);
    }

    function show_tree($id)
        {
                $store_all_id = array();
                $id_result = $this->comment_model->tree_all($id);
                if($id_result == NULL){
                    return "<h3>Belum ada Komen nih :( <br>Komen dong kk!</h3><br><br>";
                }
                else{
                    foreach ($id_result as $id_com) {
                        array_push($store_all_id, $id_com['parent_id']);
                    }
                    return  $this->in_parent(0,$id, $store_all_id);
                }
        }

        function in_parent($in_parent,$id,$store_all_id) {
                $html = "";
                if (in_array($in_parent,$store_all_id)) {
                    $result = $this->comment_model->tree_by_parent($id,$in_parent);
                    $html .=  $in_parent == 0 ? "<div class='comments__list'>" : "<div class='comments__list'>";
                    foreach ($result as $re) {
                        $html .= " <div class='comment-card'><div class='comment-card__content'>
                        <div class='comment-card__name'>".$re['comment_email']."   ->   ".$re['comment_name']."</div>
                        <div class='comment-card__date'>".date("F j, Y", $re['comment_created'])."</div></div>
                        <div class='comment-card__text'>".$re['comment_body']."</div></div>";
                        $html .=$this->in_parent($re['id_com'],$id, $store_all_id);
                        $html .= "</div>";
                    }
                    $html .=  "</div>";
                }
                return $html;
        }
}