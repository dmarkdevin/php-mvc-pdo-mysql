<?php
class crud extends Controller
{ 
	public function __construct(){
		$this->url 	= $this->url();
        $this->global_model 	= $this->model('global_model');
	}
	public function index(){ 
        $users = $this->global_model->findAll('users');
        print_r($users);
    } 
    public function create(){ 
        $Data = array(
            'name' => 'dianne'
        );
        $insert	= $this->global_model->insert('users' ,$Data);
        header('Location:'.URL_ROOT.'crud/index');
    } 
    public function update(){ 
        $Data = array(
            'name' => 'bahin'
        );
        $conditions = array('id' =>'5');
 
        $update	= $this->global_model->update('users' ,$Data,$conditions);
        header('Location:'.URL_ROOT.'crud/index');
	} 
    public function mark(){ 
       echo 'mark';
	} 
} 




