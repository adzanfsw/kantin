<?php

class M_User extends CI_Model {

	 /**
	 * If TRUE, delete methods will not delete the row,
	 * but will simply set the 'deleted' column to '1'
	 * @var bool
	 */
	protected $soft_deletes = FALSE;

	/**
	 * Specifies the way that individual rows 
	 * are returned to the user. Valid values
	 * are: 'array', 'object', or the name of a class,
	 * including namespace, if appliciable.
	 */
	protected $return_type = 'array';
	protected $temp_return_type = NULL;


	public function __construct() {
		parent::__construct();
		// set temp return type
		$this->temp_return_type = $this->return_type;
	}

	/**
	 *  
	 * 
	 * @param array $data
	 * @return int
	 */

	/**
	 * For getting data from database
	 */

	function cekUName($name) {

		$query = $this->db->from('md_users')
				->where('username', $name)
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	

	/**
	 * For inserting data to database
	 */

	function inUser($data) {

		$result = $this->db->insert('md_users', $data);
		return $result ? $this->db->insert_id() : FALSE;

	}



	/**
	 * For updating data in database
	 */




	/**
	 * For delete data in database
	 */

     
}