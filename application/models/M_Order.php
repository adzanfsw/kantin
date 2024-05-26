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

	function getOrderbyID($id) {

		$query = $this->db->from('md_order')
				->where('id_order', $id)
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getOrderIn() {

		$query = $this->db->from('md_order')
				->where_in('status', array('Order Masuk', 'Order Diproses'))
				->order_by('createdt')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function listOrderbyID($id) {

		$query = $this->db->from('md_order_items')
				->where('order_id', $id)
				->join('md_menu', 'md_menu.id_menu = md_order_items.menu_id')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getOrderSuccess() {

		$query = $this->db->from('md_order')
				->where_in('status', 'Order Selesai')
				->order_by('createdt')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	function getOrderFail() {

		$query = $this->db->from('md_order')
				->where_in('status', 'Order Batal')
				->order_by('createdt')
				->get();

		// get result
		$row = $this->temp_return_type == 'array' ? $query->result_array() :
				$query->result($this->temp_return_type);

		// temp return type
		$this->temp_return_type = $this->return_type;

		// return
		return $row;
	}

	public function laporanHarian($date) {
		
		// Build the query
		$this->db->select('md_menu.menu, SUM(md_order_items.qty) as total_qty, SUM(md_order_items.subtotal) as total_subtotal');
		$this->db->from('md_order_items');
		$this->db->join('md_order', 'md_order_items.order_id = md_order.id_order');
		$this->db->join('md_menu', 'md_order_items.menu_id = md_menu.id_menu');
		$this->db->where('md_order.status', 'Order Selesai');
		$this->db->where('DATE(md_order.createdt)', $date); // Use DATE() function to compare date part only
		$this->db->group_by('md_order_items.menu_id');
		$query = $this->db->get();

		// Determine the return type
		$row = ($this->temp_return_type == 'array') ? $query->result_array() : $query->result($this->temp_return_type);

		// Reset the return type if necessary
		$this->temp_return_type = $this->return_type;

		// Return the result
		return $row;
	}

	

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

	function setDiproses($id) {

		$this->db->where('id_order', $id);
		$result = $this->db->update('md_order', array('status' => 'Order Diproses'));

		if ($this->db->affected_rows() > 0) {
			return true; // Successful update
		} else {
			// Log or print the database error
			log_message('error', $this->db->error());
			return false; // Failed update
		}

	}

	function setSelesai($id) {

		$this->db->where('id_order', $id);
		$result = $this->db->update('md_order', array('status' => 'Order Selesai'));

		if ($this->db->affected_rows() > 0) {
			return true; // Successful update
		} else {
			// Log or print the database error
			log_message('error', $this->db->error());
			return false; // Failed update
		}

	}

	function setBatal($id) {

		$this->db->where('id_order', $id);
		$result = $this->db->update('md_order', array('status' => 'Order Batal'));

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



}