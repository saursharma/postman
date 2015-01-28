<?php 
namespace controllers;
use core\view;
use \PDO;

class Login extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function logindisplay() 
	{
		View::rendertemplate('headerlogin', $data);
		View::render('loginpage', $data);
		View::rendertemplate('footerlogin', $data);
	}
}
