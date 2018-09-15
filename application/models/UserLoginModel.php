<?php
    class UserLoginModel extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }
//for prevent the sql injection attacks
        public function checkInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function validateData(){
    
            $username = $this->checkInput($this->input->post('username'));
            $password = $this->checkInput($this->input->post('password'));

            if(($username!=null)&&($password!=null)){
                $passwords = md5($password);
                $query = $this->db->query("select*from users where username ='$username' and password='$passwords'");
                
                if($query->result()){
                    foreach($query->result() as $row){
                        $this->load->library('session');
                        $data = array(
                            'email' =>$row->email,
                            'usertype' =>$row->user_type
                            'logged_in'=>TRUE;
                        );
                        $this->session->set_userdata($data);
                        $usertype = $this->session->userdata('usertype');
                        redirect(base_url()."");

                        if($usertype =='applicant'){
                            redirect(base_url()."UserLoginController/applicant");

                        }else if($usertype =='operator'){
                            redirect(base_url()."UserLoginController/operator");
                        }
                        break;
                    }
                }
                
            }
        }
    }
?>




























