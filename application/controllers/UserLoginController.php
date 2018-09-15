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

        public function messageIndex(){
            $this->load->view('user/UserLoginMessageView');
        }
       

        public function getPostValue(){
            $this->UserLoginModel->validateData();
        }
        //for logout function
        public function logout(){
            $this->load->library('session');
            $this->session->sess_destroy();
        }

        //for open applicants dashboard
        public function applicantDashboard(){
            echo"are you a applicant";
            $this->load->view('Dashboards/ApplicantDashboard');
        }
        //for open sar dashboard
        public function sarDashboard(){
            echo"are you a sar";
            $this->load->view('Dashboards/SarDashboard');
        }
        //for open operator dashboard
        public function operatorDashboard(){
            echo"are you a operator";
            $this->load->view('Dashboards/OperatorDashboard');
        }
        //if username and password is not valid re try
        public function askForRegister(){
            $this->load->view('Registration/AskForRegisterView');
        }
        
        public function registerApplicant(){
            $this->load->view('Registration/RegisterApplicant');
        }
    } 
    
?>