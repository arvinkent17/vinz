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
		public function pagination_read( $classname, $rows = 0, $tablename = "" , $page = 1, $per_page = 20, $total_count = 0 , $message = "") {
			
			global $db;
			global $admin;
			global $user;
			global $products;

			$this->current_page = (int)$page;
			$this->per_page = (int)$per_page;
			$this->total_count = (int)$total_count;

			if( $classname == $admin ) {

				$query = "SELECT * FROM {$tablename} ";
				$query .= "LIMIT {$per_page} ";
				$query .= "OFFSET " . $this->offset();
				$result = $db->exe_query( $query );
				$admin->retrieve_admins( $result, $message, $rows );

			} elseif( $classname == $user ) {

				$query = "SELECT * FROM {$tablename} ";
				$query .= "LIMIT {$per_page} ";
				$query .= "OFFSET " . $this->offset();
				$result = $db->exe_query( $query );
				$db->retrieve_rows( $result, $message , $rows);

			} elseif( $classname == $products) {

				$query = "SELECT * FROM {$tablename} AS product ";
				$query .="INNER JOIN tbl_stocks AS stocks ";
			    $query .="ON(product.`product_id`=stocks.`product_id`) ";
				$query .= "INNER JOIN tbl_supplier AS supplier ";
				$query .= "ON(stocks.`supplier_id`=supplier.`supplier_id`)";
				$query .= "LIMIT {$per_page} ";
				$query .= "OFFSET " . $this->offset();
 				$result = $db->exe_query($query);
 				$products->retrieve_products( $result, $message, $rows );

			} else {

				$db->retrieve_rows( $result, $message, $rows );

			}

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
					$output = " <li><a class=\"\" href=\"index.php?page=";
					$output .=  $this->previous_page();
					$output .=  "\"><i class=\"fa fa-arrow-left fa-fw\"></i> Previous</a></li> ";
				}
				
				
				for( $i = 1; $i <= $this->total_pages(); ++$i ) {
					
					if( $i == $this->current_page ) {
						$output .= "<li class=\"active\"><a href=\"index.php?page={$i}\" >{$i}</a></li> ";
						
					} else {
						$output .= " <li><a href=\"index.php?page={$i}\">{$i} </a></li> ";
					}

				}
					
				if( $this->has_next_page() ) {
					$output .=  " <li><a class=\"\" href=\"index.php?page=";
					$output .=  $this->next_page();
					$output .= "\">Next <i class=\"fa fa-arrow-right fa-fw\"></i></a></li> ";
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
		 * Page List for Pagination.
		 *
		 * @access public
		 * @return string output
		 */
		public function page_list() {

			$output = "";
			$cur_page = $this->current_page;
			$tot_page = $this->total_pages();

			if( $cur_page <= $tot_page ) {
				$output .= "<h3 class=\"pagelist\">Page {$cur_page} of " ;
				$output .= "{$tot_page}</h3>";	
			}
			
			return $output;

		}
		/**
		 * Count Total Pages.
		 *
		 * @access public
		 * @return round off value of total pages
		 */
		public function total_pages() {

			return ceil( $this->total_count / $this->per_page );

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
			global $db;
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