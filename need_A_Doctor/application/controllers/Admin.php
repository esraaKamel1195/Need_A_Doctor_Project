<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('test') != TRUE) {
			$this->load->view('login_form');
		}
	}
	public function show_user()
	{
		echo "Show users";
	}
	public function upload_image()
	{
		$config['allowed_types'] = 'gif|PNG|jpg|jpeg';
		$config['max_size'] = 100000;
		$config['max_width'] = 10024;
		$config['max_height'] = 7468;
		$config['encrypt_name'] = TRUE;

		//$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('i')) {
			echo $this->upload->display_errors();
		} else {
			$data['image_source'] = base_url() . "images/" . $this->upload->data('file_name');
			$this->load->view('image', $data);
		}
	}
	public function image()
	{
		$this->load->view('upload_image');
	}
	public function FunctionName($value = '')
	{
		# code...
	}
}
