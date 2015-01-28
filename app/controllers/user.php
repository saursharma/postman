<?php 
namespace controllers;
use core\view;
use \PDO;

class User extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function userdisplay() 
	{
	    $data = $this->_db->select('SELECT app_name, count(user_id) as total_users FROM 
	    applications t1, user t2 where t1.package_name=t2.package_name', array(), PDO::FETCH_ASSOC);
	  
		View::rendertemplate('header', $data);
		View::render('userdisplay', $data);
		View::rendertemplate('footer', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
	public function subpage() {
		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		View::rendertemplate('header', $data);
		View::render('home', $data);
		View::rendertemplate('footer', $data);
	}

}
