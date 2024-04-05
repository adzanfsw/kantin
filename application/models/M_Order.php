<?php

class M_Order extends CI_Model {

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


	

	/**
	 * For inserting data to database
	 */

	 function inOrder($order, $orderItems) {

		// First action: Insert data into the first database
		$result = $this->db->insert('md_order', $order);
		// $insert_id = $result ? $this->db->insert_id() : FALSE;
		
		// Second action: Insert batch of data into the second database
		if ($result) {
			$result2 = $this->db->insert_batch('md_order_items', $orderItems);
		}
	
		// Return the insert ID of the first operation or FALSE if it failed
		return $result2 ? $this->db->insert_id() : FALSE;
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