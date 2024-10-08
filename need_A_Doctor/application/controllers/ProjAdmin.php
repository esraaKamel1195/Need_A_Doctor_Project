<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjAdmin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('proj');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$this->load->view('project/control', $data);
	}
	public function control()
	{
		$data['news'] = $this->proj->get_all('news', 'new_id'); ///show catogry
		$this->load->view('project/control', $data);
	}
	public function add_comment($new_id)
	{

		$data['comment_desc'] = $this->input->post('comment');
		$data['new_id'] = $new_id;
		$data['username'] = $this->session->userdata('username');
		if ($this->proj->insert_comment($data)) {
			redirect("Project/shownew/$new_id", 'refresh');
		} else {
			echo "eeroor";
		}
	}
	public function m()
	{
		echo "m";
	}

	public function Addnew()
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['user_id'] = 3;
		$data['cat_id'] = $this->input->post('cat_id');



		if ($this->proj->insert('news', $data) == TRUE) {
			redirect('Project');
		} else {
			redirect('ProjAdmin');
		}
	}
	public function edit($id)
	{

		$data['news'] = $this->proj->getnew($id);
		$data['cat'] = $this->proj->get_all('cats', 'cat_id'); ///show catogry
		$this->load->view('project/editnew', $data);
	}
	public function update($id)
	{
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['cat_id'] = $this->input->post('cat_id');
		if ($this->proj->updatenew($data, $id)) {
			redirect('ProjAdmin/control', 'refresh');
		} else {
			echo "error";
		}
	}
	public function delete($id)
	{

		if ($this->proj->delete_new($id)) {
			redirect('ProjAdmin/control');
		} else
			echo "error";
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
	public function get_users_api()
	{
		$q = $this->db->get('users');
		echo  json_encode(['result' => $q->result()]);
	}
	public function get_users_By_id_api($user_id)
	{
		$this->db->where('user_id', $user_id);
		$q = $this->db->get('users');
		echo  json_encode(['result' => $q->result()]);
	}
}
