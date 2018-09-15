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
                $query = $this->db->query("select*from users where username ='$username' and password='$password'");

                foreach($query->result() as $row){
                    if($row->password== md5($password)){
                        echo"password in matched";
                    }
                    else{
                        echo"username or password is not match please try again";
                    }
                }
            }
        }
    }
?>