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
                //echo"ok you ar selected $username and $password";
                $query = $this->db->query("select*from users where username ='$username' and password='$passwords'");
                
                if($query->result()){
                    foreach($query->result() as $row){
                        $this->load->library('session');
                        $data = array(
                            'email' =>$row->email,
                            'usertype' =>$row->user_type,
                            'logged_in'=>TRUE
                        );
                        $this->session->set_userdata($data);
                        $usertype = $this->session->userdata('usertype');
                        

                        if($usertype =='applicant'){
                            redirect(base_url()."/index.php/UserLoginController/applicantDashboard");
                        }
                        else if($usertype =='operator'){
                            redirect(base_url()."/index.php/UserLoginController/operatorDashboard");
                        }
                        else if($usertype =='sar'){
                            redirect(base_url()."/index.php/UserLoginController/sarDashboard");
                        }
                        else{
                            echo"$username";
                        }
                        break;
                    }  
                }
                else{
                    //ask for register or re try
                    redirect(base_url()."/index.php/UserLoginController/messageIndex");
                }
                
            }
            else{
                echo"sorry your pasword or username has an empty field so check again";
            }
        }
    }
?>




























