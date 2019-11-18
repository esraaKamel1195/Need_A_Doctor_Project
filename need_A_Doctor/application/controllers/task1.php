<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// dont care 
class Task1 extends CI_Controller {

public function index (){
        $data['user']="user";
		$this->load->view("task/task1/welUser",$data);

}
public function show(){
	$data['name']= array('hosam','mohamed','ahmed','sayed','ameen');
	$data['age']= array(15,18,14,13,12);
	$data['mail']= array('@hosam','@mohamed','@ahmed','@sayed','@ameen');
	$this->load->view("task/task1/showusers",$data);
}

 public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
         $data['user']=$username;
        // $data['pass']=$password;
        if ($username == "hosam" and $password == "123") {
                     
            $this->load->view("task/task1/welUser",$data);
        } else {
          $this->load->view("task/task1/login");

        }
    }
    public function to_login(){
        $this->load->view("task/task1/login");
    }

}