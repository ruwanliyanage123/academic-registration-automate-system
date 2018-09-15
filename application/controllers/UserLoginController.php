<?php
    class UserLoginController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('UserLoginModel');
            $this->load->helper('url');
        }
        public function index(){
            $this->load->view('user/UserLoginView');
        }
        public function getPostValue(){
            echo"posted";
            $this->UserLoginModel->validateData();
        }
    
    } 
    
?>