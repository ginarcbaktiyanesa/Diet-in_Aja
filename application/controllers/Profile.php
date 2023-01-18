<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( $this->session->userdata('status') != "login" ){
			redirect('http://localhost/Diet-in_Aja/login');
        }
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('current_password', 'Current Password', 'trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'trim|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'trim|matches[new_password1]');
        

        if( $this->form_validation->run() == false ){
            $this->load->view('profile');
        }else{
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $username = $this->input->post('username');
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if( $current_password == null ){
                $this->db->set('first_name', $first_name);
                $this->db->set('last_name', $last_name);
                $this->db->where('username', $username);
                $this->db->update('user');

                $this->session->set_flashdata('message', '<script>alert("Your profile has been updated!");</script>');
                redirect('http://localhost/Diet-in_Aja/profile');
            }else{
                if( !password_verify($current_password, $data['user']['password']) ){
                    $this->session->set_flashdata('message', '<script>alert("Wrong current password!");</script>');
                    redirect('http://localhost/Diet-in_Aja/profile');
                }else{
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $username);
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<script>alert("New password has been updated!");</script>');
                    redirect('http://localhost/Diet-in_Aja/profile');
                }
            }
        }

    }
    

}
