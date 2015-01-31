<?php 
namespace controllers;
use core\view;
use \PDO;

class Users extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function index() 
	{
	    $data = $this->_db->select('SELECT app_name, count(user_id) as total_users FROM 
	    applications t1, user t2 where t1.package_name=t2.package_name', array(), PDO::FETCH_ASSOC);
	  
		View::rendertemplate('header', $data);
		View::render('users/userdisplay', $data);
		View::rendertemplate('footer', $data);
	}

	public function login() 
	{
	  
		View::rendertemplate('header', $data);
		View::render('users/logindisplay', $data);
		View::rendertemplate('footer', $data);
	}

}
