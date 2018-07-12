<?php
class member extends Controller
{ 
	public function __construct(){
		$this->url 	= $this->url();
		$this->global_model 	= $this->model('global_model');
	}
	public function index(){ 
		
		redirect('member/dashboard');
		 
	} 
    public function dashboard(){ 
		
		$data['title'] = "DASHBOARD PAGE";
		
		$this->view('users/header');
		$this->view('member/index');
		$this->view('users/footer');
	 
	} 
	public function tables(){ 
		
		$data['title'] = "TABLES PAGE";
		
		$this->view('users/header');
		$this->view('member/tables');
		$this->view('users/footer');
	 
	}
	public function form(){ 
		
		$data['title'] = "FORM PAGE";
		
		$this->view('users/header');
		$this->view('member/form');
		$this->view('users/footer');
	 
	}
	public function inquiries(){ 
		
		$data['title'] = "INQUIRIES PAGE";
		
		$this->view('users/header');
		$this->view('member/inquiries');
		$this->view('users/footer');
	 
	} 
	public function inquiry(){ 
		
		$data['title'] = "INQUIRIES PAGE";
		
		$this->view('users/header');
		$this->view('member/inquiry');
		$this->view('users/footer');
	 
	} 


	public function profile(){ 
		
		$data['title'] = "PROFILE PAGE";
		
		$this->view('users/header');
		$this->view('member/profile');
		$this->view('users/footer');
	 
	}  

	public function inquire(){ 
		
		$data['title'] = "INQUIRE PAGE";
		
		$this->view('users/header');
		$this->view('member/inquire');
		$this->view('users/footer');
	 
	}  


	public function upload(){ 
		
		$data['title'] = "UPLOAD PAGE";
		 
	 
		$this->view('users/header');
		$this->view('member/upload');
		$this->view('users/footer');
	 
	}  


 
	public function delete(){ 
		
		$files = glob("uploads/*");
		 
		foreach ($files as $file) {
			
			if($file != 'uploads/index.html'){
				if (filemtime($file) < time() - (86400 * 2)) {
					// echo ($file).'<br><br>';
					unlink($file);
				}
			}
		}
	 
	}  



	public function test(){ 
		
		$data['title'] = "TEST PAGE";
		
		// $this->view('member/header');
		$this->view('member/test');
		// $this->view('member/footer');
	 
	}


} 




