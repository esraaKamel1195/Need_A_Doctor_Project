<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task3 extends CI_Controller
{
	public function __construct() // dont write the load every function
	{
		parent::__construct();
		$this->load->model('news');
		$this->load->model('cour');
	}
	public function index()
	{
		$data['new'] = $this->news->getall();
		$this->session->unset_userdata('content');
		$this->load->view('task/task3/shownews', $data);
	}
	public function control()
	{
		$data['new'] = $this->news->getall();
		$this->load->view('task/task3/control', $data);
	}
	public function add()
	{

		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');

		$this->news->insert($data);
		redirect('task/task3/Task3/control');
	}
	public function delet($id)
	{
		if ($this->news->delete($id))
			redirect('task/task3/Task3/control');
		else {
			echo "error";
			redirect('task/task3/Task3/control');
		}
	}
	public function getnews()
	{
		$data['new'] = $this->news->getall();
		$this->load->view('task/task3/control', $data);
	}
	public function edit($id)
	{
		$res['n'] = $this->news->getnew($id);
		$this->load->view('task/task3/editnew', $res);
	}
	public function update($id)
	{
		$this->load->model('news');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		$this->news->update($id, $data);
		redirect('Task3/control');
	}
	public function shownew($id)
	{

		$data['new'] = $this->news->getnew($id);
		$this->session->set_userdata('content', 'test');
		$this->load->view('task/task3/shownews', $data);
	}
	public function ckeck()
	{
		$username = $this->input->post('username');

		$password = $this->input->post('password');
		$res = $this->cour->check($username, $password);
		if ($res == FALSE) {
			$this->session->set_flashdata('login', 'failed plz try again');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('logged_in');

			$this->session->sess_destroy();

			redirect('Task3/login', 'refresh');
		} else {
			foreach ($res as $user) {
				$user_id = $user->id;
				$name = $user->username;
				$email = $user->email;
			}
			$this->session->set_userdata(array(
				'logged_in' => TRUE,
				'id' => $user_id,
				'email' => $email,
				'username' => $name
			));

			redirect('Task3/control');
		}
	}

	public function tologin()
	{
		$this->load->view('task/task3/login');
	}
}
