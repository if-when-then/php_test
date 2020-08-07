<?php

namespace controllers;


use libs\bootstrap;
use libs\Controller;
use libs\View;
use libs\Session;
use libs\Database;
use models\indexModel;

class IndexController extends Controller
{
	public $model;
	
	public function __construct() 
	{		
		parent::__construct();
	}	
	
	public function actionIndex($message='Сайт визитка'){  
		$this->view->render('index', ['message' => $message]);
	}	  
	
	public function actionLogin(){
		$this->view->render('login');
		error_log('User login');
	}
	
	public function actionLogout() {
		Bootstrap::$session->init(true);
		Bootstrap::$session->set('auth_id', false);
		Bootstrap::$session->__unset('user_id');			
		error_log('User logout');		
		$this->view->render('index', ['message' => 'Вы вышли из аккаунта']);
	}  	
	
	public function actionLK() {	
		$result = indexModel::getUser();			
		$this->view->render('lk', ['email' => $result[0]['email'],
		                           'fio' => $result[0]['fio']]);
	}
	
	public function actionUpdatelk() {	
		$result = indexModel::setUser();			
		if ($result){
			$this->view->render('index',['message' => 'Изменение данных прошло успешно']);
		}else{
			$this->view->render('error', ['error' => 'Ошибка обновления данных']);			
		}
	}
	
	public function actionAdduser() {		
		$result = indexModel::setRegistration();
		if ($result){	
			$this->view->render('login');
		}else{
			$this->view->render('registration', ['error' => 'Ошибка регистрации']);			
		}		
		error_log('Registration user');
	}  	
	
	public function actionRegistration() {	
		$this->view->render('registration');	
	}  	

	public function actionError() {
		$this->view->render('error');
	}  	

	public function actionAuth() {
		$result = indexModel::getAuth();	
		if($result) {
			Bootstrap::$session->init(true);			
			Bootstrap::$session->set('auth_id', true);
			Bootstrap::$session->set('user_id', $result[0]['id']);			
			$this->view->render('index',['message' => 'Вход успешен']);
		} else {
			Bootstrap::$session->init(true);			
			Bootstrap::$session->set('auth_id', false);			
			Bootstrap::$session->__unset('user_id');	
			$this->view->render('error', ['error' => 'authentication error']);
		}			
	}
}
