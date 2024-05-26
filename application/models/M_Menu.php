<?php

class M_Menu extends CI_Model {

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

	function listMenu() {

		$query = $this->db->from('md_menu')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getMenu() {

		$query = $this->db->from('md_menu')
				->join('md_jenis', 'md_jenis.id_jenis = md_menu.jenis_id')
				->where('stok', 'Tersedia')
				->order_by('menu', 'ASC')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getMenubyJenis($id) {

		$query = $this->db->from('md_menu')
				->join('md_jenis', 'md_jenis.id_jenis = md_menu.jenis_id')
				->where('jenis_id', $id)
				->where('stok', 'Tersedia')
				->order_by('menu', 'ASC')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getMenubyID($id) {

		$query = $this->db->from('md_menu')
				->where('id_menu', $id)
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

	function inMenu($data) {

		$result = $this->db->insert('md_menu', $data);
		return $result ? $this->db->insert_id() : FALSE;

	}



	
	/**
	 * For updating data in database
	 */

	function setMenu($data, $id) {

		$this->db->where('id_menu', $id);
		$result = $this->db->update('md_menu', $data);

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

	function delMenu($id) {

		return $this->db->where('id_menu', $id)
						->delete('md_menu');

	}

}