<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('proj');
		$this->load->library('form_validation');
	}
	public function temp()
	{
		$this->load->view('temp');
	}
	public function index()
	{
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$data['lastNew'] = $this->proj->getNewOFCat('news', 5); ///show last news
		$data['lastNewLim'] = $this->proj->getOrderLim('news');
		$data['newTecno'] = $this->proj->getNewOFCat('news', 6); ///show tecno catogry
		$data['FTechno'] = $this->proj->getfirstOFCat('news', 6); ///show tecno catogry
		$data['newsport'] = $this->proj->getNewOFCat('news', 1); ///show sport catogry
		$data['FSport'] = $this->proj->getfirstOFCat('news', 1); ///show sport catogry
		$data['newPolic'] = $this->proj->getNewOFCat('news', 3); ///show tecno catogry
		$data['FPolic'] = $this->proj->getfirstOFCat('news', 3); ///show tecno catogry
		$data['newFashion'] = $this->proj->getNewOFCat('news', 2); ///show tecno catogry
		$data['FFash'] = $this->proj->getfirstOFCat('news', 2); ///show tecno catogry
		$data['newurgem'] = $this->proj->getNewOFCat('news', 2); ///show tecno catogry
		$data['FUrgem'] = $this->proj->getfirstOFCat('news', 2); ///show tecno catogry
		$this->load->view('project/content', $data);
	}
	public function showCat($id)
	{
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$data['lastNew'] = $this->proj->getOrder('news'); ///show last news
		$data['lastNewLim'] = $this->proj->getOrderLim('news');
		$data['cat_name'] = $this->proj->getNewsOFCat('news', $id);
		$data['catName'] = $this->proj->getNameOfCat($id);

		$this->load->view('project/shownews', $data);
	}

	public function shownew($id)
	{
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$data['lastNew'] = $this->proj->getOrder('news'); ///show last news
		$data['news'] = $this->proj->shownew($id);
		$data['category_name'] = $this->proj->getNameOfCat($id);
		$data['comments'] = $this->proj->getComments($id);

		$this->load->view('project/shownew', $data);
	}

	//************* login ***************\
	public function tologin()
	{
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$data['lastNew'] = $this->proj->getOrder('news'); ///show last news
		$this->load->view('project/login', $data);
	}
	public function ckeck()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$res = $this->proj->check($username, $password);
		if ($res == FALSE) {
			$this->session->set_flashdata('login', 'try again');
			//$this->session->unset_userdata('username');
			//$this->session->sess_destroy();
			redirect('project/tologin', 'refresh');
		} else {
			foreach ($res as $value) {
				$arr = array(
					'username' => $value->username,
					'user_id' => $value->user_id,
					'logged_in' => TRUE
				);
			}
			$this->session->set_userdata($arr);
			//print_r($arr);
			redirect('Project');
		}
	}

	public function loginout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('Project');
	}

	//************* register ***************\
	public function to_regist()
	{
		//$data['cat']=$this->proj->get_all('cats','cat_id');///show catogry
		//$data['lastNew']=$this->proj->getOrder('news');///show last news
		//$this->load->view('project/register',$data);
		$this->load->view('project/register');
	}
	public function register()
	{
		$this->form_validation->set_message('xss_clean', 'dangerous!! bad request');
		$this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
		$this->form_validation->set_message('required', 'هذا الحقل مطلوب');
		$this->form_validation->set_rules('username', 'name', 'required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('email', 'mail', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$err['username'] = $this->input->post('username');
			$err['password'] = $this->input->post('password');
			$err['email'] = $this->input->post('email');
			$err['cat'] = $this->proj->get_all('cats'); ///show catogry
			$err['lastNew'] = $this->proj->getOrder('news'); ///show last news
			$this->load->view('project/register', $err);
		} else {
			$data['username'] = htmlspecialchars($this->input->post('username'));
			$data['password'] = $this->input->post('password');
			$data['email'] =    htmlspecialchars($this->input->post('email'));
			if ($this->proj->insert('patient', $data) == TRUE) {
				$this->session->set_userdata('username', $data['username']);
				redirect('Project');
			} else {
				print_r($data);
				redirect('Project/to_register');
			}
		}
	}
}
