<?php
namespace models;
class Viewapp extends \core\model
{
	public function getApp()
	{
		$data = $this->_db->select('SELECT * FROM applications', array(), PDO::FETCH_ASSOC);
		return $data;
	} 
}
?>
