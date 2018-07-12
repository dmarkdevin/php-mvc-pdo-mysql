<?php
class page extends Controller
{ 
	public function __construct(){
		$this->url 	= $this->url();
		$this->global_model 	= $this->model('global_model');
	}
	public function index(){ 
		
		$data['title'] = "HOME PAGE";
		
		$this->view('header',$data);
		$this->view('index');
		$this->view('footer');
	} 
	public function about(){ 
		
		$data['title'] = "ABOUT PAGE";
		
		$this->view('header',$data);
		$this->view('about');
		$this->view('footer');
	} 	
	public function services(){ 
		
		$data['title'] = "SERVICES PAGE";
		
		$this->view('header',$data);
		$this->view('services');
		$this->view('footer');
	} 
	public function contact(){ 
		
		$data['title'] = "CONTACT PAGE";
		
		$this->view('header',$data);
		$this->view('contact');
		$this->view('footer');
	} 
 
	public function login(){ 
		
		$data['title'] = "LOGIN PAGE";

		if(isset($_POST['submit'])){
			redirect('member');
		}
		
		$this->view('header',$data);
		$this->view('login');
		$this->view('footer');
	} 
	 
	public function register(){ 
		
		$data['title'] = "REGISTER PAGE";
		
		$this->view('header',$data);
		$this->view('register');
		$this->view('footer');
	} 
} 




