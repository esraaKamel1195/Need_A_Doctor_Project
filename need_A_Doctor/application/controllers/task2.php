<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Task2 extends CI_Controller
{
	public function index()
	{
		$data['username'] = 'user';
		$data['username'] = $this->session->userdata('username');
		$this->load->view('task/task2/homepage', $data);
	}

	public function to_login()
	{
		$this->load->view('task/task2/login');
	}

	public function login()
	{
		$this->load->model('TaskReg');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		if ($this->TaskReg->check('user', $data)) {
			$this->load->view('task/task2/homepage', $data);
			$this->session->set_userdata('username', $data['username']);
		} else
			$this->load->view('task/task2/login');
	}

	public function to_register()
	{
		$this->load->view('task/task2/register');
		$this->session->set_flashdata('reg', 'registered');
	}

	public function register()
	{
		$this->load->model('TaskReg');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('mail');
		$data['password'] = sha1($this->input->post('password'));
		if ($this->TaskReg->insert('user', $data)) {
			//echo $this->session->flashdata('reg');
			$this->session->set_userdata('username', $data['username']);
			$this->load->view('task/task2/homepage', $data);
		} else
			echo 'there is error';
	}

	public function longout()
	{
		$this->session->unset_userdata('username');
		//index();
		echo "your are long out";
		echo '<a href=' . base_url() . "Task2>HomePage</a>";
	}
}
