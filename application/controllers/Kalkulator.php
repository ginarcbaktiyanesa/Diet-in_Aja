<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalkulator extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		if( $this->session->userdata('status') != "login" ){
			redirect('http://localhost/Diet-in_Aja/login');
		}
	}

	 public function index()
	{
		$input = $this->input->post('btKalkulator');
		$hitung = 0;

		

		if ($input == "true") {
			$gender = $this->input->post('gender');
			$umur = $this->input->post('umur');
			$tinggi = $this->input->post('tinggi');
			$berat = $this->input->post('berat');
			if(empty($umur) or empty($tinggi) or empty($berat)){
				$hitung = 0;
			}else{
				if ($gender == "male") 
				{
					$hitung = 88.362 + (13.397 * $berat) + (4.799 * $tinggi) - (5.677 * $umur);			
				} 
				else if ($gender == "female") 
				{
					$hitung = 447.593 + (9.247 * $berat) + (3.098 * $tinggi) - (4.33 * $umur);
				}
			}

		}

		$data = [
            'hitung' => $hitung,
            'title' => "Kalkulator" 

        ];
		
		

		$this->load->view('kalkulator',$data);
	}
}