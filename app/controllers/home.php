<?php 
namespace controllers;
use core\view;
use \PDO;

class Home extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		
		// query for total no of applications..
	    $app_count = $this->_db->select('SELECT COUNT(*) AS app_count FROM applications', array(), PDO::FETCH_ASSOC);
	    $user_count = $this->_db->select('SELECT COUNT(*) AS user_count FROM user', array(), PDO::FETCH_ASSOC);
	    $msg_count = $this->_db->select('SELECT COUNT(*) AS msg_count FROM message', array(), PDO::FETCH_ASSOC);
	  
	    $data['app_count']= $app_count[0]['app_count'];
	    $data['user_count']= $user_count[0]['user_count'];
	    $data['msg_count']= $msg_count[0]['msg_count'];
			  
		View::rendertemplate('header', $data);
		View::render('home', $data);
		View::rendertemplate('footer', $data);
	}
	
	public function subpage() {
		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		View::rendertemplate('header', $data);
		View::render('applications', $data);
		View::rendertemplate('footer', $data);
	}

}
