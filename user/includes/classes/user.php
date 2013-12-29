<?php
	/**
     * This File Contains User Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 26, 2013
     * @since December 26, 2013
	 */

	/**
	 * User Object Class
	 * 
	 */
	class Users {

		/**
		 * Counts Users.
		 * 
		 * @access public
		 * @return total number of Users 
		 */
		public function count() {
			global $db;
			$result =  $db->exe_query( "SELECT * FROM tbl_users" );
			$count = $db->num_rows( $result );

			if( $count == 0 ) {
				
			}
			return $count;
		}

		/**
		 * Retrieve Data from Table User
		 *
		 * 
		 * @access public
		 * @param string $result, string $message
		 * @throws notification if empty result
		 */
		public function retrieve_users( $result , $message = "" ) {

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
					$name = urlencode($row['fname']);
					echo "<tr valign=center>";
					echo "<td>{$cnt}</td>";	
					echo "<td>" . ucfirst($row['fname']) . " " . ucfirst($row['lname']) . " " . ucfirst($row['mname']) . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>". $row['addr'] . "</td>";
					echo "<td>0" . $row['contact_no'] . "</td>";
					echo "<td>" . $row['username'] . "</td>";
					echo "<td>
							  <a class=\"nav-text\" href=\"operations/edit.php?id=" . urlencode($row["user_id"]) . "&name={$name}" . "\">Edit</a>
						      <a class=\"nav-text\" href=\"operations/delete.php?id=" . urlencode($row["user_id"]) . "&name={$name}" . "\">Delete</a>
						  </td>";
						
					echo "</tr>";
					$cnt++;
				}
			}
		}

		public function search_user( $result , $message = "" ) {

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
					echo "<td>" . $row['fname'] . "</td>";
					echo "<td>" . $row['lname'] . "</td>";
					echo "<td>" . $row['mname'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['addr'] . "</td>";
					echo "<td>0" . $row['contact_no'] . "</td>";
					echo "<td>0" . $row['username'] . "</td>";
					echo "<td>
							  <a class=\"nav-text\" href=\"operations/edit.php?id=" . urlencode($row["user_id"]) . "&name={$productname}" . "\">Edit</a>
						      <a class=\"nav-text\" href=\"operations/delete.php?id=" . urlencode($row["user_id"]) . "&name={$productname}" . "\">Delete</a>
						  </td>";
						
					echo "</tr>";
					$cnt++;
				}
			}
		}
	}

	/**
	 * Instantiate User Object Class.
	 */
	$user = new Users();
	
?>