<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //    $this->load->model('home_model');
        //    $this->load->model('profile_model');
        //    $this->load->model('category_model');
     
    }

    public function index() {
        $data['controller']                = $this->router->class;    
        $data['reset_link']                = base_url() . $data['controller'] . '/';
        $main                              = $data['controller'] . '/index';
        // $session_data                      = $this->session->userdata('send_id');
        // $m_id                              =$session_data['id'];
        // $data['getprofiledata']            =$this->profile_model->getprofiledata($m_id);
        // $data['menucategory']	           = $this->home_model->getAllcategorySubcat('');
        // $data['categories']                = $this->category_model->get_categories_with_products();   
        // $data['getmultidata']              =$this->category_model->getmultidata(); 
        // $data['getmultidatahome']          =$this->home_model->getmultidatahome(); 
        // $data['getmultidatahomelogo']      =$this->home_model->getmultidatahomelogo(); 
        // $data['banner']                    = $this->home_model->bannerdata();   
        $this->load->view('header', $data);
        $this->load->view($main,$data);
        $this->load->view('footer', $data);
    }
     

  

   
}

?>
