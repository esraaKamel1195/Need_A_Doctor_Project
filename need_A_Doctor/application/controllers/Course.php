<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
	public function __construct() // dont write the load every function
	{
		parent::__construct();
		$this->load->model('cour');
	}
	
	public function wel()
	{
		$data['name'] = 'hosam';
		$data['website'] = 'www.google';
		$this->load->view('admin/admin', $data);
	}

	public function valid()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($username == "hosam" and $password == "123") {
			echo 'valid';
		} else {
			echo 'not valid';
		}
	}

	public function sess()
	{
		$arr = array(
			'name' => "mohamed",
			'age' => 20
		);
		$this->session->set_userdata($arr);
		//$this->session->unset_userdata($arr);
		//$this->session->sess_destroy();
		echo $this->session->userdata('name');
		echo $this->session->userdata('age');
		$this->session->set_flashdata('logged_in', 'انت الان مسجل الدخول');
	}

	public function logout()
	{
		session_destroy();
		//$this->session->sess_destroy();
		echo $this->session->flashdata('logged_in');
		echo $this->session->userdata('name');
		echo $this->session->userdata('age');
	}

	public function showuser()
	{
		$this->load->model('cour');
		$data['user'] = $this->cour->get_all('user');
		$this->load->view('show_users', $data);
	}

	public function specific()
	{
		$this->load->model('Mod1');
		$res['users'] = $this->Mod1->get_specific('users');
		$this->load->view('show_users', $res);
	}

	public function insert_user()
	{
		$this->load->model('cour');
		$data = array('username' => 'mohamed', 'email' => 'hosam@h', 'password' => sha1(123)); //sha1 is hash to protect password
		if ($this->cour->insert('user', $data))
			echo 'inseted';
		else
			echo 'not inserted';
	}


	//******************  ************************\

	public function edit($id)
	{
		$this->load->model('cour');
		$res['users'] = $this->cour->getuser('user', $id);
		$this->load->view('edit_user', $res);
	}

	public function update($id)
	{
		$this->load->model('cour');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		if ($this->cour->update_user($data, $id)) {
			$this->session->set_flashdata('updated', 'تم تحديث البيانات');
			redirect('Course/showuser', 'refresh');
		} else {
			echo "error";
		}
	}

	public function delete($id)
	{
		$this->load->model('cour');
		if ($this->cour->delete_user($id)) {
			$this->session->set_flashdata('deleted', 'تم مسح المتسخدم بنجاح');
			redirect('Course/showuser', 'refresh');
		}
	}

	//**************** register ******************\
	public function ckeck()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$res = $this->cour->check($username, $password);

		if ($res == FALSE) {
			echo "test";
			$this->session->set_flashdata('test', 'failed plz try again');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('test');

			$this->session->sess_destroy();

			redirect('Course/login_form', 'refresh');
		} else {
			foreach ($res as $user) {
				$user_id = $user->id;
				$name = $user->username;
				$email = $user->email;
			}
			$this->session->set_userdata(array(
				'test' => TRUE,
				'id' => $user_id,
				'email' => $email,
				'username' => $name
			));

			redirect('Admin/show_user', 'refresh');
		}
	}

	public function login_form()
	{
		$this->load->view('login_form');
	}

	public function to_regist()
	{
		$this->load->view('register');
	}

	public function register()
	{
		$this->load->library('form_validation');

		//if (isset($_POST)) {
		$this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
		$this->form_validation->set_message('xss_clean', 'dangerous!! bad request');

		$this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
		$this->form_validation->set_message('required', 'هذا الحقل مطلوب');
		$this->form_validation->set_rules('username', 'اسم المستخدم', 'required|min_length[3]|max_length[40]|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$err['username'] = $this->input->post('username');
			$err['password'] = $this->input->post('password');
			$err['email'] = $this->input->post('email');
			$this->load->view('register', $err);
		} else {
			//`id`, `email`, `password`, `image`, `restaurant_name`, `phone`, `address`
			$data['username'] = htmlspecialchars($this->input->post('username'));
			$data['password'] = sha1($this->input->post('password'));
			$data['email'] = htmlspecialchars($this->input->post('email'));
			$email =  $data['email'];

			$this->load->model('cour');
			if ($this->cour->insert('user', $data) == TRUE) {
				$this->session->set_flashdata('register', "$email you are register Successfully Login Now!");
				redirect('Course/showuser');
			} else {
				$this->session->set_flashdata('register', 'Failled to Register plz try again');
				redirect('Course/showuser');
			}
		}
	}
}
