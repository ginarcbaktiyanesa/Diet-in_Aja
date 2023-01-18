<?php

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if($this->form_validation->run() == false){
            $data['judul'] = "Log In";
            $this->load->view('login/login', $data);

        }else{
            //validasi success
            $this->_login();
        }
    }

    private function _login(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //cek username
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        
        if($user){
            //cek password
            if(password_verify($password, $user['password'])){
                $data = [
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'username' => $user['username'],
                    'picture' => $user['picture'],
                    'status' => 'login'
                ];
                $this->session->set_userdata($data);
                // $this->session->set_userdata('login', true);
                redirect('http://localhost/Diet-in_Aja/welcomediet');
            }else{
                $this->session->set_flashdata('message', '<script>alert("Wrong password!");</script>');
                redirect('http://localhost/Diet-in_Aja/login');
            }
        }else{
            $this->session->set_flashdata('message', '<script>alert("Username is not registered!");</script>');
            redirect('http://localhost/Diet-in_Aja/login');
        }

    }

    public function logout(){
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('picture');

        $this->session->set_flashdata('message', '<script>alert("You have been logged out!");</script>');
        redirect('http://localhost/Diet-in_Aja/login');
    }
}

?>