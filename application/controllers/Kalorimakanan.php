<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalorimakanan extends CI_Controller
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
	public function index()
	{
		// https://api.edamam.com/api/nutrition-data?app_id=459b9d30&app_key=d83e4b2e9b63f891b8b53b79ffd24575&ingr=carrot
		// $url= "https://api.edamam.com/api/nutrition-data?";
		// $idapp = "app_id="."459b9d30";
		// $apikey = "&app_key="."d83e4b2e9b63f891b8b53b79ffd24575";
		// $keyword = "&ingr=one%20"."rice";

		$input = $this->input->post('food');

		if ($input == null) {
			$input = "apple";
		}

		$input = str_replace(" ", "-", $input);

		// https://api.edamam.com/api/food-database/v2/parser?ingr=carrot&app_id=459b9d30&app_key=d83e4b2e9b63f891b8b53b79ffd24575		
		$url = "https://api.edamam.com/api/food-database/v2/parser?";
		$keyword = "ingr=" . $input;
		$idapp = "&app_id=" . "459b9d30";
		$apikey = "&app_key=" . "d83e4b2e9b63f891b8b53b79ffd24575";


		$endpoint = file_get_contents($url . $keyword . $idapp . $apikey);
		$result = json_decode($endpoint, true);
		$bantu = json_decode($endpoint, true);

		if ($result['parsed'] == null) {
			$result = array(
				'parsed' => [
					'0' => [
						'food' => [
							'foodId' => 'dkfsdg',
							'label' => 'Not found',
							'nutrients' => [
								'ENERC_KCAL' => '-',
								'PROCNT' => '-',
								'FAT' => '-',
								'CHOCDF' => '-',
								'FIBTG' => '-'
							],
							'image' => 'Assets/css/img/data-not-found.png'
						]
					]
				]
			);
		} else if (count($result['parsed']['0']['food']) < 6) {
			// $a = key_exists('ENERC_KCAL', $result['parsed']['0']['food']['nutrients']);
			// $b = key_exists('PROCNT', $result['parsed']['0']['food']['nutrients']);
			// $c = key_exists('FAT', $result['parsed']['0']['food']['nutrients']);
			// $d = key_exists('CHOCDF', $result['parsed']['0']['food']['nutrients']);
			// $e = key_exists('FIBTG', $result['parsed']['0']['food']['nutrients']);
			$result = array(
				'parsed' => [
					'0' => [
						'food' => [
							'foodId' => 'dkfsdg',
							'label' => $bantu['parsed']['0']['food']['label'],
							'nutrients' => [
								'ENERC_KCAL' => $bantu['parsed']['0']['food']['nutrients']['ENERC_KCAL'],
								'PROCNT' => $bantu['parsed']['0']['food']['nutrients']['PROCNT'],
								'FAT' => $bantu['parsed']['0']['food']['nutrients']['FAT'],
								'CHOCDF' => $bantu['parsed']['0']['food']['nutrients']['CHOCDF'],
								'FIBTG' => '-'
							],
							'image' => 'Assets/css/img/image-not-found.png'
						]
					]
				]
			);
		}

		$hasil = $result['parsed']['0']['food'];

		$data = [
			'hasil' => $hasil,
			'title' => "Food Calories"

		];
		$this->load->view('kalorimakanan', $data);
	}

	public function search()
	{
		if ($this->input->post('search')) {
			$input = $this->input->post('food');
			die;
		}

		// https://api.edamam.com/api/food-database/v2/parser?ingr=carrot&app_id=459b9d30&app_key=d83e4b2e9b63f891b8b53b79ffd24575		
		$url = "https://api.edamam.com/api/food-database/v2/parser?";
		$keyword = "ingr=" . "carrot";
		$idapp = "&app_id=" . "459b9d30";
		$apikey = "&app_key=" . "d83e4b2e9b63f891b8b53b79ffd24575";


		$endpoint = file_get_contents($url . $keyword . $idapp . $apikey);
		$result = json_decode($endpoint, true);
		$hasil = $result['parsed']['0']['food'];

		$data = [
			'hasil' => $hasil,
			'title' => 'Food Calories'

		];
		$this->load->view('kalorimakanan', $data);
	}
}