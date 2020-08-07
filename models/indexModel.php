<?php

namespace models;

use libs\bootstrap;
use libs\Controller;
use libs\View;
use libs\Session;
use libs\Database;
use libs\Model;

class IndexModel extends Model 
{
	public function __construct() 
	{
		parent::__construct();		
	}
	
	public function getUser(){
		$params = array(
			Bootstrap::$session->get('user_id')
		);
		$result = Database::execute('SELECT login, password, email, fio FROM users WHERE id = ? ', 'i', $params);		
		return	$result;	
	}

	public function setUser(){	
		$params = array(
			$_POST['email'],
			$_POST['fio'],			
			Bootstrap::$session->get('user_id')			
		);
		$result = Database::execute('UPDATE users SET email = ?, fio = ? WHERE id = ?', 'ssi', $params);				
		return	$result;	
	}

	public function setRegistration(){
		$params = array(
			$_POST['login'],
			$_POST['password'],
			$_POST['email'],
			$_POST['fio']			
		);
		$result = Database::execute('INSERT INTO users (login, password, email, fio) values (?, MD5(?), ?, ?)', 'ssss', $params);				
		return	$result;	
	}
	
	public function getAuth(){
		$params = array(
			$_POST['login'],
			$_POST['password']
		);
		$result = Database::execute('SELECT id FROM users WHERE login = ? AND password = MD5(?)', 'ss', $params);	
		return  $result;
	}	
}