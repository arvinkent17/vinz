<?php
	/**
     * This File Contains User Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 26, 2013
     * @since December 26, 2013
	 */

	class Products {
		/**
		 * Counts Sold Products.
		 * 
		 * @access public
		 * @return total number of Sold Products 
		 */
		public function sold_products() {
			global $db;
			$result =  $db->exe_query( "SELECT * FROM tbl_purchased" );
			$count = $db->num_rows( $result );

			return $count;
		}

		/**
		 * Counts Total Stocks.
		 * 
		 * @access public
		 * @return total number of Stocks 
		 */
		public function count_stocks() {
			global $db;
			$result =  $db->exe_query( "SELECT SUM(quantity) as totalstocks FROM tbl_stocks" );
			
			$row = $db->fetch_row($result);
			return $row['totalstocks'];
		}

		/**
		 * Counts Remaining Stocks.
		 * 
		 * @access public
		 * @return total number of Stocks 
		 */
		public function remaining_stocks() {
			
			global $db;
			$result =  $db->exe_query( "SELECT SUM(quantity) as totalstocks FROM tbl_stocks" );
			
			$row = $db->fetch_row($result);
			return $row['totalstocks'];

		}

		/**
		 * Retrieve Data from Table Products
		 * 
		 * @access public
		 * @throws notification if empty result
		 */
		public function retrieve_products( $result, $message = "", $rows = 0 ) {
			
			$output = "";

			global $paginate;
			global $db;

			if( $db->num_rows( $result ) == 0 ) {

				echo "<td align=center colspan={$rows}><div id=\"alertdanger2\" class=\"alert alert-danger\">";
				echo "<h4 id=\"alertmessage1\">{$message}</h4>";
				echo "</div></td>";

			} else {

				$cnt = $paginate->offset() + 1;			

				while ( $row = $db->fetch_row( $result ) ) {
					$productname = urlencode($row['product_name']);
					echo "<tr valign=center>";
					echo "<td>{$cnt}</td>";	
					echo "<td>" . ucfirst($row['product_name']) . "</td>";
					echo "<td>" . $row['desc'] . "</td>";
					echo "<td><i class=\"fa fa-dollar fa-fw\"></i>" . $row['price'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . ucfirst($row['supplier_name']) . "</td>";
					echo "<td>
							  <a class=\"nav-text\" href=\"operations/edit.php?id=" . urlencode($row["product_id"]) . "&product={$productname}" . "\">Edit</a>
						      <a class=\"nav-text\" href=\"operations/delete.php?id=" . urlencode($row["product_id"]) . "&product={$productname}" . "\">Delete</a>
						  </td>";
						
					echo "</tr>";
					$cnt++;
				}
			}
			
		}

		public function search_product( $result , $message = "" ) {

			$output = "";

			global $paginate;
			global $db;

			if( $db->num_rows( $result ) == 0 ) {

				echo "<td align=center colspan={$rows}><div class=\"alert-message error\">";
				echo "<h4>{$message}</h4>";
				echo "</div></td>";

			} else {

				$cnt = $paginate->offset() + 1;			

				while ( $row = $db->fetch_row( $result ) ) {
					$productname = urlencode($row['product_name']);
					echo "<tr valign=center>";
					echo "<td>{$cnt}</td>";	
					echo "<td>" . $row['product_name'] . "</td>";
					echo "<td>" . $row['desc'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . $row['supplier_name'] . "</td>";
					echo "<td>
							  <a class=\"nav-text\" href=\"operations/edit.php?id=" . urlencode($row["product_id"]) . "&product={$productname}" . "\">Edit</a>
						      <a class=\"nav-text\" href=\"operations/delete.php?id=" . urlencode($row["product_id"]) . "&product={$productname}" . "\">Delete</a>
						  </td>";
						
					echo "</tr>";
					$cnt++;
				}
			}
		}
	}

	/**
	 * Instantiate the Products Object Class
	 */
	$products = new Products();
?>