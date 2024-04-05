<?php

class M_Jenis extends CI_Model {

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

	function getJenis() {

		$query = $this->db->from('md_jenis')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getJenisbyID($id) {

		$query = $this->db->from('md_jenis')
				->where('id_jenis', $id)
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

	function inJenis($data) {

		$result = $this->db->insert('md_jenis', $data);
		return $result ? $this->db->insert_id() : FALSE;

	}



	/**
	 * For updating data in database
	 */

	function setJenis($data, $id) {

		$this->db->where('id_jenis', $id);
		$result = $this->db->update('md_jenis', $data);

		if ($this->db->affected_rows() > 0) {
			return true; // Successful update
		} else {
			// Log or print the database error
			log_message('error', $this->db->error());
			return false; // Failed update
		}

	}



	/**
	 * For delete data in database
	 */

	function delJenis($id) {

		return $this->db->where('id_jenis', $id)
						->delete('md_jenis');

	}

}