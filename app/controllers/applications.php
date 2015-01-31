<?php 
namespace controllers;
use core\view;
use \PDO;

class Applications extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function index() {

	    $data = $this->_db->select('SELECT * FROM applications', array(), PDO::FETCH_ASSOC);		

		View::rendertemplate('header', $data);
		View::render('applications/applications', $data);
		View::rendertemplate('footer', $data);
	}
	
	public function addapplication()
	{
        View::rendertemplate('header', $data);
		View::render('success', $data);
		View::rendertemplate('footer', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
	public function addapp() {
		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		View::rendertemplate('header', $data);
		View::render('applications/addapplications', $data);
		View::rendertemplate('footer', $data);
	}

}
