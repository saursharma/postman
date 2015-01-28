<?php 
namespace controllers;
use core\view;
use \PDO;

class Application extends \core\controller{

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}
	/**
	 * Define Index page title and load template files
	 */
	public function appdisplay() {
		#$data['title'] = $this->language->get('welcome_text');
		#$data['welcome_message'] = $this->language->get('welcome_message');
		
	    $data = $this->_db->select('SELECT * FROM applications', array(), PDO::FETCH_ASSOC);
	    
	  
		View::rendertemplate('header', $data);
		View::render('applications', $data);
		View::rendertemplate('footer', $data);
	}
	
	public function addapplication()
	{
        View::rendertemplate('header', $data);
		View::render('success', $data);
		View::rendertemplate('footer', $data);
	}
/**
	public function applications()
	{
	    View::rendertemplate('header',$data);
		View::render('applications',$data);
		View::rendertemplate('footer',$data);
	}
*/
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
