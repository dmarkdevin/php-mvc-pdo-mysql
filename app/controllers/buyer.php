<?php
class buyer extends Controller
{ 
	public function __construct(){
		$this->url 	= $this->url();
		$this->global_model 	= $this->model('global_model');
	}
	public function index(){ 
		
		redirect('buyer/dashboard');
		 
	} 
    public function dashboard(){ 
		
		$data['title'] = "DASHBOARD PAGE";
		
		$this->view('users/header');
		$this->view('buyer/index');
		$this->view('users/footer');
	 
	} 
	public function inquiry(){ 
		
		$data['title'] = "INQUIRY PAGE";
		
		$this->view('users/header');
		$this->view('buyer/inquiry');
		$this->view('users/footer');
	 
	} 
	public function inquire(){ 
		
		$data['title'] = "INQUIRE PAGE";
		
		$this->view('users/header');
		$this->view('buyer/inquire');
		$this->view('users/footer');
	 
	} 


} 




