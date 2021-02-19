<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	public function index()
	{
		// $this->output->cache(1);
		// $this->load->view('testview');


		// $this->load->helper('myhelper');
		// show();
		// $this->load->library('mylibrary');
		// $this->mylibrary->mylibraryfun();


		// $this->output->enable_profiler(TRUE);
		// echo " Hello World";


		// $this->load->library('encryption'); //first enable encryption_key in $config folder
		// $plain_text = 'test data';
		// $ciphertext = $this->encryption->encrypt($plain_text);
		// echo $ciphertext."<br/>";
		// Outputs: This is a plain-text message!
		// echo $this->encryption->decrypt($ciphertext);


		// 	$this->load->helper('captcha');
		// 	$vals = array(
		// 		'img_path'      => './captcha/',
		// 		'img_url'       => base_url('captcha'),
		// 		'img_width'     => '150',
		// 		'img_height'    => 30,
		// 		'expiration'    => 7200,
		// 		'word_length'   => 5,
		// 		'img_id'        => 'Imageid',
		// 		'pool'          => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

		// 		// White background and border, black text and red grid
		// 		'colors'        => array(
		// 				'background' => array(0, 0, 0),
		// 				'border' => array(0, 0, 0),
		// 				'text' => array(255, 255, 255),
		// 				'grid' => array(0, 0, 0)
		// 		)
		// );
		// $cap = create_captcha($vals);
		// echo $cap['image'];



		// $this->load->helper('file');
		// $content=file_get_contents(APPPATH.'controllers/Login.php');
		// echo "<pre>";
		// print_r($content);

		$this->load->view('image'); // uncomment this view for resize_image function
	}

	public function myfun()
	{ // create a route in config/route.php for this function
		echo "I am myfun";
	}


	public function resize_image()
	{
		$this->load->library('image_lib');
		$config = array(
			'width' => $this->input->post('width'),
			'height' => $this->input->post('height'),
			'source_image' => './upload/original_image.jpg',
			'new_image' => './upload/resize_image.jpg'
		);
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		} else {
			// $this->load->view('image');
			redirect(base_url());
		}
	}
}
