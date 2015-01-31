<?php 
namespace controllers;
use core\view;
use \PDO;

class Messages extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function index() 
	{	
		$data = $this->_db->select('SELECT * FROM message', array(), PDO::FETCH_ASSOC);
	
		View::rendertemplate('header', $data);
		View::render('messages/msgdisplay', $data);
		View::rendertemplate('footer', $data);
	}

}
