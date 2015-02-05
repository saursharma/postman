<?php 
namespace controllers;
use core\view;
use \PDO;

class Applications extends \core\controller{

    #private $_model;

	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
		#$this->_model= new \models\viewapp();
	}

   // Function to display all applications...
	public function index() {

	    $data = $this->_db->select('SELECT * FROM applications', array(), PDO::FETCH_ASSOC);		

		#$data= $this->_model->getApp();
		#print_r($data);
	#	echo "jghjg"; 
		
		View::rendertemplate('header', $data);
		View::render('applications/viewapplications', $data);
		View::rendertemplate('footer', $data);
	}
	
	public function addapplication($data)
  {
    print_r($data);
    return $data;
        //View::rendertemplate('header', $data);
		View::render('success', $data);
		//View::rendertemplate('footer', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
  public function addapp() {
    print_r($_POST['data']);
		//$data['title'] = $this->language->get('subpage_text');
		//$data['welcome_message'] = $this->language->get('subpage_message');
		
		//View::rendertemplate('header', $data);
		//View::render('applications/addapplication', $data);
		//View::rendertemplate('footer', $data);
	}

}
