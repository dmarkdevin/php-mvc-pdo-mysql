<?php
class administrator extends Controller
{ 
	public function __construct(){
		$this->url 	= $this->url();
		$this->global_model 	= $this->model('global_model');
	}
	public function index(){ 
		
		redirect('administrator/dashboard');
		 
	} 
    public function dashboard(){ 
		
		$data['title'] = "DASHBOARD PAGE";
		
		$this->view('users/header');
		$this->view('administrator/index');
		$this->view('users/footer');
	 
	} 
 
    public function members(){ 
		
		$data['title'] = "DASHBOARD PAGE";
		
		$this->view('users/header');
		$this->view('administrator/members');
		$this->view('users/footer');
	 
	} 
    public function add_member(){ 
		
		$data['title'] = "DASHBOARD PAGE";
		
		$this->view('users/header');
		$this->view('administrator/add_member');
		$this->view('users/footer');
	 
	} 
} 




