<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
	}	
	/**
	 * index
	 *
	 * @return void
	 */
	public function index()
	{
		$this->load->view('main');
		$this->load->helper('html');
	}
	
	/**
	 * val
	 *
	 * @return void
	 */
	public function val()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run()) {
			$data = $this->input->post();
		} else {
			$this->load->view('main');
		}
	}
}
