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
	
	public function addmsg() {
		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		//View::rendertemplate('header', $data);
		View::render('messages/addmessage', $data);
		//View::rendertemplate('footer', $data);
	}
	
	public function savemsg()
	{
		$data='jhjhjhjh';
		print_r($_POST['002']);
		print_r($data);
		//View::render('success', $data);
	}

}
