<?php


$configs = [
    'path' => [
        'ASSETS'	=> URL_ROOT . 'assets/startbootstrap-modern-business/',
        'BACK'      => '',
        'FRONT'     => '',
        'UPLOADS'	=> 'uploads/'
    ],
    'database' => [
        'DB_HOST'	    => 'localhost:3306',
        'DB_NAME'	    => 'test',
        'DB_USERNAME'	=> 'root',
        'DB_PASSWORD'	=> ''   
    ],
    'session' => [
    	'ID'	=> 'IDTOBECHANGEdmarkdevin',
		'TYPE'	=> 'TYPETOBECHANGEdmarkdevin',
		'NAME'	=> 'NAMETOBECHANGEdmarkdevin',
		'EMAIL'	=> 'EMAILTOBECHANGEdmarkdevin',
		'IMAGE'	=> 'IMAGETOBECHANGEdmarkdevin'	
    ],
    'profile' => [
        'COMPANY_NAME'  => 'dmarkdevin',
        'DATE_FORMAT'   => 'Y-m-d H:i:s'
    ]      

];


foreach ($configs as $config) {
    foreach ($config as $key => $value) {
      define($key, $value);
      // echo 'define("'.$key.'" , "'.$value.'")<br>';
    }
}

// CREATE TABLE `tbl_users` (
//   `id` int(255) NOT NULL AUTO_INCREMENT,
//   `name` varchar(1000) DEFAULT NULL,
//   `username` varchar(1000) DEFAULT NULL,
//   `password` varchar(1000) DEFAULT NULL,
//   `image` varchar(1000) DEFAULT NULL,
//   `email` varchar(1000) DEFAULT NULL,
//   `contact_number` varchar(1000) DEFAULT NULL,
//   `birth_date` varchar(1000) DEFAULT NULL,
//   `type` varchar(1000) DEFAULT NULL,
//   `detail` text,
//   `status` int(255) DEFAULT NULL,
//   `user_id` int(255) DEFAULT NULL,
//   `date_added` datetime DEFAULT NULL,
//   `date_modified` datetime DEFAULT NULL,
//   `token` varchar(1000) DEFAULT NULL, PRIMARY KEY (id)
// );
  