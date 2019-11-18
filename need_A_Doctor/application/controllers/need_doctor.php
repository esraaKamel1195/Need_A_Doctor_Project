<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class need_doctor extends Ci_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('project');//(name of page not class)
	}

	public function index()
	{ 
		$arr['doctor']=$this->project->get_doctors();
    $this->load->view('proj_need_doctor/index',$arr);
	}

  public function indexdoc()
  {
     $this->load->view('proj_need_doctor/indexdoctor');
  }

  public function indexpat()
  {
     $this->load->view('proj_need_doctor/indexpat');
  }

	public function doc()
	{   
      $err['Specialty']=$this->project->get_Specialty();
		$this->load->view('proj_need_doctor/doc', $err);
	}
  public function loginforedit()
  {
    $this->load->view('proj_need_doctor/register/loginforedit'); 
  }
  public function adminlogin()
  {
    $this->load->view('proj_need_doctor/register/admin'); 
  }
  public function profiledoc()
  {  
       $email= $this->input->post('email');
       $password= $this->input->post('password');
       $res['doctor']=$this->project->check('doctor',$email,$password);
       if($res == FALSE)
       {

           redirect('need_doctor/loginforedit','refresh');
       }
       else
       {
        $err['Specialty']=$this->project->get_Specialty();
        $this->load->view('proj_need_doctor/profile doctor',$res,$err);
         
        
       }
  }

	public function update($id)
    {
       $data['first_name'] = htmlspecialchars($this->input->post('first_name'));
       $data['last_name'] = htmlspecialchars($this->input->post('last_name'));
       $data['password'] = md5($this->input->post('password'));
       $data['email'] =    htmlspecialchars($this->input->post('email'));
       $data['clinic_number'] = $this->input->post('number');
       $data['street'] =    htmlspecialchars($this->input->post('street'));
       $data['gender'] =    htmlspecialchars($this->input->post('Gender'));
       $data['age'] = $this->input->post('age');
       $data['phone'] = $this->input->post('phone');
       $data['Experience'] = $this->input->post('Experience');
       $data['qualify'] =    htmlspecialchars($this->input->post('qualify'));
       $data['appoint'] =    htmlspecialchars($this->input->post('appoint'));
       $data['Specialty'] =    htmlspecialchars($this->input->post('Specialty'));
       $data['price'] = $this->input->post('price');
       $data['photo'] = $this->input->post('image');
       
       if($this->project->update_user($data,$id))
       {
       
        redirect('need_doctor/doctor','refresh');
       }
       else
       {
        echo "error";
       }
    }

  public function pat()
	{
		$this->load->view('proj_need_doctor/pat');
	}
	
  public function doclogin()
	{
		$this->load->view('proj_need_doctor/doclogin');
	}
	
  public function patlogin()
	{
		$this->load->view('proj_need_doctor/patlogin');
	}
	
  public function login()
	{
		$this->load->view('proj_need_doctor/register/login');
	}
  
  public function logout()
  { 
    $this->load->view('proj_need_doctor/index');
  }
	
  public function register()
	{
		$this->load->view('proj_need_doctor/register/register');
	}
	
  public function form_patient()
  {
    $this->load->view('proj_need_doctor/form patient');
  }
  
  public function findspeciality()
  {
    $Status=$this->input->post('Status');
  
     $fall=$this->input->post('fall');
     $price=$this->input->post('price');
	 $street=$this->input->post('street');
    
   $speciality=$this->project->get_SpecialtyFromSymptoms($fall);
    foreach($speciality as $value);
    { 
	 if($price==1)
	     {$doctor['doctor']=$this->project->get_doctorby($value->name_s,50,100,$street);}
	 if($price==2)
		 {$doctor['doctor']=$this->project->get_doctorby($value->name_s,100,200,$street);}
     if($price==3)
		 {$doctor['doctor']=$this->project->get_doctorby($value->name_s,200,300,$street);}
	 if($price==4)
		 {$doctor['doctor']=$this->project->get_doctorby($value->name_s,500,1000,$street);}
	 $this->load->view('proj_need_doctor/doctors/doctor',$doctor);
	}
	
  }
 
  public function doctor()
	{   
		$price=$this->input->post('price');
	    $street=$this->input->post('street');
        $Specialty=$this->input->post('Specialty');
		$arr['doctor']=$this->project->get_doctors();
		
		if ($price==null&&$street==null&&$Specialty==null)
        {$this->load->view('proj_need_doctor/doctors/doctor',$arr);}
	    if($price==1)
		{$arr['doctor']=$this->project->get_doctorbyprice(50,100);
	    
	    }
		if($price==2)
		{$arr['doctor']=$this->project->get_doctorbyprice(100,200);
	    
	    }
		if($price==3)
		{$arr['doctor']=$this->project->get_doctorbyprice(200,300);
	    
	    }
		if($price==4)
		{$arr['doctor']=$this->project->get_doctorbyprice(500,1000);
	    
	    }
		if($street!='location')
		{$arr['doctor']=$this->project->get_doctorbylocation($street);}
	    if($Specialty!='Specialty')
		{$arr['doctor']=$this->project->get_doctorbySpecialty($Specialty);
	    
	    }
		
		$this->load->view('proj_need_doctor/doctors/doctor',$arr);
	}

  public function search()
  { $search=$this->input->post('search');
  
    $arr['doctor']=$this->project->get_doctorbysearch($search);
     if($arr == FALSE)
       {  $this->load->view('proj_need_doctor/doctors/doctor');}
     else{
      $this->load->view('proj_need_doctor/doctors/doctor',$arr);}
  }

	public function doctor_member($photo)
	{ 
    $arr['doctor']=$this->project->get_doctorbyphoto($photo);
    if($arr == FALSE)
       {$this->load->view('proj_need_doctor/doctors/doctor');}
     else{
		$this->load->view('proj_need_doctor/doctors/doctors/member1',$arr);}
	}

	public function login_information($table_name)
	{    $email= $this->input->post('email');
       $password= $this->input->post('password');
       $res=$this->project->check($table_name,$email,$password);
       if($res == FALSE)
       {
        
        if($table_name=="patient")
           redirect('need_doctor/patlogin','refresh');
        else if($table_name=="doctor")
           redirect('need_doctor/doclogin','refresh');
         else redirect('need_doctor/adminlogin','refresh');

       }
       else
       { if ($table_name=="patient"||$table_name=="doctor")
         {
        foreach ($res as $value) {
            $arr=array( 'id'=>$value->id,
                        'email'=>$value->email,
                        'first_name'=>$value->first_name,
                        'last_name'=>$value->last_name,
                        'type'=>$table_name
                     );
        
        $this->project->insert('session',$arr);
        if($table_name=="patient")
           redirect('need_doctor/indexpat');
        else if($table_name=="doctor")
           redirect('need_doctor/indexdoc');  
          }  
        $this->session->set_userdata($arr);
        }
        else 
        {
           redirect('need_doctor/doc');
       
          }  
        
        }
       

	}

	public function register_informationDoctor($table_name)
	{      
		        $this->load->library('form_validation');
		        $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
            $this->form_validation->set_message('xss_clean', 'dangerous!! bad request');
            $this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
            $this->form_validation->set_message('required','This field is reguired' );
            $this->form_validation->set_rules('first_name','name','required|min_length[3]|max_length[40]');
            $this->form_validation->set_rules('last_name','lname','required|min_length[3]|max_length[40]');
            $this->form_validation->set_rules('email','mail','required|valid_email|is_unique[doctor.email]');
            $this->form_validation->set_rules('phone','Phone','required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('repass', 'Repass', 'required|min_length[6]|max_length[20]|matches[password]');
          
                 $this->form_validation->set_rules('number','clinic_number','required|min_length[6]|max_length[20]');
                 $this->form_validation->set_rules('street','Street','required|min_length[3]|max_length[40]');
                 if ($this->form_validation->run() == FALSE) 
                 {
                   $err['firstName'] = $this->input->post('first_name');
                   $err['lastName'] = $this->input->post('last_name');
                   $err['password'] = $this->input->post('password');
                   $err['repass'] = $this->input->post('repass');
                   $err['email'] = $this->input->post('email');
                   $err['clinic_number'] = $this->input->post('number');
                   $err['street'] = $this->input->post('street');
                   $err['gender'] = $this->input->post('Gender');
                   $err['age'] = $this->input->post('age');
                   $err['phone'] = $this->input->post('phone');
                   $err['Experience'] = $this->input->post('Experience');
                   $err['qualify'] = $this->input->post('qualify');
                   $err['apoint'] = $this->input->post('apoint');
                   $err['Specialty'] = $this->project->get_Specialty();;
                   $this->load->view('proj_need_doctor/doc', $err);
                
                 }
                 else
                 {
                    $data['first_name'] = htmlspecialchars($this->input->post('first_name'));
                    $data['last_name'] = htmlspecialchars($this->input->post('last_name'));
                    $data['password'] = md5($this->input->post('password'));
                    $data['email'] =    htmlspecialchars($this->input->post('email'));
                    $data['clinic_number'] = $this->input->post('number');
                    $data['street'] =    htmlspecialchars($this->input->post('street'));
                    $data['gender'] =    htmlspecialchars($this->input->post('Gender'));
                    $data['age'] = $this->input->post('age');
                    $data['phone'] = $this->input->post('phone');
                    $data['Experience'] = $this->input->post('Experience');
                    $data['qualify'] =    htmlspecialchars($this->input->post('qualify'));
                    $data['appoint'] =    htmlspecialchars($this->input->post('appoint'));
                    $data['Specialty'] =    htmlspecialchars($this->input->post('Specialty'));
                    $data['price'] = $this->input->post('price');
                    $data['photo'] = $this->input->post('image');


                    if ($this->project->insert('doctor',$data) == TRUE) 
                    { $res=$this->project->get_doctorbyemail($data['email'],'doctor');
                      foreach ($res as $value) {
                             $this->session->set_userdata('id',$value->id);  
                       }     
                       $this->session->set_userdata('first_name',$data['first_name']);
                       $this->session->set_userdata('last_name',$data['last_name']);
                       $this->session->set_userdata('email',$data['email']);
                      $arr=array('id'=>$this->session->userdata('id'),
                        'email'=>$data['email'],
                        'first_name'=>$data['first_name'],
                        'last_name'=>$data['last_name'],
                        'type'=>'doctor'
                     );
                    $this->project->insert('session',$arr);
                      redirect('need_doctor/indexdoc');
                    } 
                    else 
                    { 
                    print_r($data);
                    redirect('need_doctor/register_informationDoctor');
                    }
                 }
 }
           
 public function register_informationPatient($table_name)
  {      
      $this->load->library('form_validation');
      $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
            $this->form_validation->set_message('xss_clean', 'dangerous!! bad request');
            $this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
            $this->form_validation->set_message('required','This field is reguired' );
            $this->form_validation->set_rules('first_name','name','required|min_length[3]|max_length[40]');
            $this->form_validation->set_rules('last_name','lname','required|min_length[3]|max_length[40]');
            $this->form_validation->set_rules('email','mail','required|valid_email|is_unique[patient.email]');
            $this->form_validation->set_rules('phone','Phone','required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('repass', 'Repass', 'required|min_length[6]|max_length[20]|matches[password]');
            $this->form_validation->set_rules('street','Street','required|min_length[3]|max_length[40]');
             
                 if ($this->form_validation->run() == FALSE) 
                 {
                   $err['first_name'] = $this->input->post('first_name');
                   $err['last_name'] = $this->input->post('last_name');
                   $err['password'] = $this->input->post('password');
                   $err['repass'] = $this->input->post('repass');
                   $err['email'] = $this->input->post('email');
                   $err['street'] = $this->input->post('street');
                   $err['gender'] = $this->input->post('Gender');
                   $err['age'] = $this->input->post('age');
                   $err['phone'] = $this->input->post('phone');
                      $this->load->view('proj_need_doctor/pat',$arr);
                
                 }
                 else
                 {
                    $data['first_name'] = htmlspecialchars($this->input->post('first_name'));
                    $data['last_name'] = htmlspecialchars($this->input->post('last_name'));
                    $data['password'] = md5($this->input->post('password'));
                    $data['email'] =    htmlspecialchars($this->input->post('email'));
                    $data['street'] =    htmlspecialchars($this->input->post('street'));
                    $data['gender'] =    htmlspecialchars($this->input->post('Gender'));
                    $data['age'] = $this->input->post('age');
                    $data['phone'] = $this->input->post('phone');
                    if ($this->project->insert($table_name,$data) == TRUE) 
                    { $res=$this->project->get_doctorbyemail($data['email'],'patient');
                      foreach ($res as $value) {
                             $this->session->set_userdata('id',$value->id);  
                       }     
                       $this->session->set_userdata('first_name',$data['first_name']);
                       $this->session->set_userdata('last_name',$data['last_name']);
                       $this->session->set_userdata('email',$data['email']);
                      $arr=array('id'=>$this->session->userdata('id'),
                        'email'=>$data['email'],
                        'first_name'=>$data['first_name'],
                        'last_name'=>$data['last_name'],
                        'type'=>'doctor'
                     );
                    $this->project->insert('session',$arr);
                      redirect('need_doctor/indexpat');
                    } 
                    else 
                    { 
                    print_r($data);
                    redirect('need_doctor/register_informationPatient');
                    }
                 }
	}
}
?>