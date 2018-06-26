<?php
class user_model extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function check_password($table,$password)
    {
        $sql = 'SELECT * FROM '.$table.' WHERE id = :id AND password = :password';            
        $statement = $this->conn->prepare($sql);
        $statement->execute(
            [
                ':id'    => $_SESSION[ID], 
                ':password' => ($password)
            ]
        );
        return $statement->rowCount();
    }

    public function login($table)
    {
        $sql = 'SELECT * FROM '.$table.' WHERE username = :username AND password = :password';        	
        $statement = $this->conn->prepare($sql);
        $statement->execute(
        	[
        		':username'	=> $_POST['username'], 
        		':password'	=> ($_POST['password'])
            ]
        );
        return $statement->rowCount();
    }

    public function session($table)
    {
        $sql = 'SELECT * FROM '.$table.' WHERE username = :username AND password = :password';            
        $statement = $this->conn->prepare($sql);
        $statement->execute(
            [
                ':username'    => $_POST['username'], 
                ':password' => ($_POST['password'])
            ]
        );
        $user = $statement->fetch();
       
        $_SESSION[ID]    =  ($user['id']);
        $_SESSION[NAME]  =  ucwords($user['name']);
        $_SESSION[TYPE]  =  strtoupper($user['type']);
        $_SESSION[EMAIL] =  strtolower($user['email']);

        return $user;
    }
 
    public function user($table)
    {
        $sql = 'SELECT * FROM '.$table.' WHERE email = :email';            
        $statement = $this->conn->prepare($sql);
        $statement->execute(
            [
                ':email'    => $_POST['email']
            ]
        );
        return $statement->fetch();
    }

    public function if_exist($table)
    {
        $sql = 'SELECT * FROM '.$table.' WHERE email = :email';            
        $statement = $this->conn->prepare($sql);
        $statement->execute(
            [
                ':email'    => $_POST['email']
            ]
        );
        return $statement->rowCount();
    }
}






