<?php

class Signup extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){

        $this->form_validation->set_rules('first_name', 'First name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => '*Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
            'matches' => '*Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false){
            $data['judul'] = "Sign Up";
            $this->load->view('signup/signup', $data);
        }else{
            $current_datetime = date('Y-m-d H:i:s');

            $data  = [
                'first_name' => htmlspecialchars($this->input->post('first_name')),
                'last_name' => htmlspecialchars($this->input->post('last_name')),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'created_at' => $current_datetime
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<script>alert("Congratulation! your account has been created. Please login");</script>');
            redirect('http://localhost/Diet-in_Aja/login');
        }
    }
}

?>