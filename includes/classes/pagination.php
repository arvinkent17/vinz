<?php
	/**
     * This File Contains Pagination Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 26, 2013
     * @since December 26, 2013
	 */

	/**
	 * Pagination Object Class
	 *
	 */
	class Pagination {
		
		/**
		 * Variables for Pagination.
		 *
		 * @access public
		 */
		public $current_page;
		public $per_page;
		public $total_count;

		/**
		 * Paginations Any Table from Database.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @param integer $page, $per_page, $total_count
		 * @access public
		 */
		public function pagination_read( $tablename = "" , $page = 1, $per_page = 20, $total_count = 0 ) {
			global $db;

			$db->current_page = (int)$page;
			$db->per_page = (int)$per_page;
			$db->total_count = (int)$total_count;

			$query = "SELECT * FROM {$tablename} ";
			$query .= "LIMIT {$per_page} ";
			$query .= "OFFSET " . $this->offset();
			$result = $db->exe_query( $query );
			$db->retrieve_rows( $result );

		}

		/**
		 * Generates Paginations link. 
		 *
		 * @access public
		 * @return output.
		 */
		public function pagination_links() {
			
			$output = "";

			if( $this->total_pages() > 1 ) {
								
				if( $this->has_previous_page() ) {
					$output = " <a href=\"index.php?page=";
					$output .=  $this->previous_page();
					$output .=  "\">Previous &laquo;</a> ";
				}

				for( $i = 1; $i <= $this->total_pages(); ++$i ) {
					$output .= " <a href=\"index.php?page={$i}\">{$i}</a> ";
				}


					
				if( $this->has_next_page() ) {
					$output .=  " <a href=\"index.php?page=";
					$output .=  $this->next_page();
					$output .= "\">Next &raquo;</a> ";
				}
				return $output;

			}
		}

		/**
		 * Offset for Pagination.
		 *
		 * @access public
		 * @return offset value
		 */
		public function offset() {

			return ( $this->current_page - 1) * $this->per_page;

		}

		/**
		 * Count Total Pages.
		 *
		 * @access public
		 * @return round off value of total pages
		 */
		public function total_pages() {

			return ceil( $this->total_count/$this->per_page );

		}

		/**
		 * Get Previous Page 
		 *
		 * @access public
		 * @return previous page value
		 */
		public function previous_page() {

			return $this->current_page - 1;

		}

		/**
		 * Get Next Page 
		 *
		 * @access public
		 * @return next page value
		 */
		public function next_page() {

			return $this->current_page + 1;

		}

		/**
		 * Check if there is previous page value 
		 *
		 * @access public
		 * @return boolean TRUE or FALSE
		 */
		public function has_previous_page() {

			return $this->previous_page() >= 1 ? true : false;

		}

		/**
		 * Check if there is next page value 
		 *
		 * @access public
		 * @return boolean TRUE or FALSE
		 */
		public function has_next_page() {

			return $this->next_page() <= $this->total_pages() ? true : false;

		}

		/**
		 * Retrieve All Rows from a Database Table
		 *
		 * @access public
		 */
		public function find_all( $tablename = "" ) {
			global $db;

			$query = "SELECT * FROM " . $tablename;
			$result = $db->exe_query( $query , $db->$connection);
			$db->fetch_rows( $result );

		}

		/**
		 * Count Rows from a Database Table
		 *
		 * @access public
		 */
		public function count_all( $tablename = "" ) {

			$query = "SELECT COUNT(*) FROM " . $tablename;
			$result = $db->exe_query( $query );
			$row = $db->fetch_row( $result );
			return array_shift( $row );

		}
	}

	/**
	 * Instantiate Pagination Object Class.
	 */
	$paginate = new Pagination();

?>