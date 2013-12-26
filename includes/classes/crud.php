<?php 
	/**
     * This File Contains Operations Class.
     * 
     * This is my Own MVC CRUD operations.
     *
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 23, 2013
     * @since December 23, 2013
	 */

	/**
	 * Operations Object Class
	 *
	 */
	class Operations {

		/**
		 * Retrieve All Data in a Table.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @access public
		 */
		public function read( $tablename = "" ) {
			global $db;

			$query = "SELECT * FROM " . $tablename;
			$result = $db->exe_query( $query , $db->connection);
			$db->fetch_row( $result );
		}

		/**
		 * Retrieve All Data in a Table by ID.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @param integer $id
		 * @access public
		 * @return 1 Full Row from a Database Table
		 */
		public function read_by_id( $tablename = "", $id = 0 ) {
			global $db;

			$countfields = "SELECT * FROM " . $tablename;

			$result = $db->exe_query( $countfields );

			$f_array = array();

			for( $cntfield = 0; $cntfield < $db->num_fields( $result ); ++$cntfield ) {
				$f_array[] = $db->field_names( $result, $cntfield );
			}

			$query = "SELECT * FROM " . $tablename . " ";
			$query .= "WHERE " . $f_array[0] . " = " . $id . " ";
			$query .= "LIMIT 1";
			$result2 = $db->exe_query( $query , $db->connection );
			$row = $db->fetch_row( $result2 );

			return $row;
		}

		/**
		 * Inserts Data in a Table.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @param array $post_val
		 * @access public
		 */
		public function create( $tablename = "", $post_val ) {				
			$arr = array();

			foreach( $post_val as $key => $value ) {
				$arr[] = $value;
			}

			$require_fields = $arr;

			$countfields = "SELECT * FROM " . $tablename;
			$result = $db->exe_query($countfields, $db->connection);

			$field_arr = array();

			foreach( $require_fields as $fieldnames ) {
				$field_arr[] = $db->escape_value($fieldnames);
			}

			$get_required_fields = "'" . implode( "','", $field_arr ) . "'";

			$f_array = array();

			for( $cntfield = 1; $cntfield < $db->num_fields( $result ); ++$cntfield ) {
				$f_array[] = $db->field_names( $result, $cntfield );
			}

			$get_field_names = implode( ", ", $f_array );

			$query = "INSERT INTO {$tablename} ({$get_field_names})
					  VALUES ({$get_required_fields})";
			$result2 = $db->exe_query($query, $db->connection);						
		}

		/**
		 * Updates Data in a Table.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @param array $post_val
		 * @param integer $id
		 * @access public
		 */
		public function update( $tablename = "", $post_val, $id = 0 ) {
			
			$arr = array();

			foreach( $post_val as $key => $value ) {
				$arr[] = $value;
			}

			$require_fields = $arr;

			$countfields = "SELECT * FROM " . $tablename;
			$result = $db->exe_query( $countfields, $db->connection );

			$field_arr = array();

			foreach( $require_fields as $fieldnames ) {
				$field_arr[] = $fieldnames;
			}

			$f_array = array();
			$new_fields = array();

			for( $cntfield = 1; $cntfield < $db->num_fields( $result ); ++$cntfield ) {
				$f_array[$cntfield] = $db->field_names( $result, $cntfield );
				foreach( $f_array as $newf_array ) {
				}
				$new_fields[] = $newf_array;
			}

			$dn_fields = array();

			for( $incre = 0; $incre < count( $field_arr ); ++$incre ) {
				$d_fields = "`" . $new_fields[$incre] . "`";
				$n_fields = "'" . $db->escape_value($field_arr[$incre]) . "'";
				$dn_fields[] = $d_fields . " = " . $n_fields;
				$newdn_fields = implode( ",", $dn_fields );
			}
			
			$f_array2 = array();

			for ( $cntfield2 = 0; $cntfield2 < $db->num_fields( $result ); ++$cntfield2 ) {
				$f_array2[] = $db->field_names( $result, $cntfield2 );
			}

			$query = "UPDATE " . $tablename . " ";
			$query .= "SET " . $newdn_fields . " ";
			$query .= "WHERE " . $f_array2[0] . " = " . $id;
			$result2 = $db->exe_query( $query, $db->connection);
			
		}

		/**
		 * Delete ALl Data in a Table.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @access public
		 */
		public function delete( $tablename = "" ) {
			
			$query = "DELETE FROM " . $tablename;
			$result = $db->exe_query( $query, $db->$connection );

		}

		/**
		 * Delete ALl Data in a Table by ID.
		 *
		 * It is Dynamic Table
		 *
		 * @param string $tablename
		 * @param integer $id
		 * @access public
		 */
		public function delete_by_id( $tablename = "", $id = 0 ) {

			$countfields = "SELECT * FROM " . $tablename;
			$result = $db->exe_query( $countfields, $db->connection );

			$f_array = array();

			for( $cntfield = 0; $cntfield < $db->num_fields( $result ); ++$cntfield ) {
				$f_array[] = $db->field_names( $result, $cntfield );
			}

			$query = "DELETE FROM " . $tablename . " ";
			$query .= "WHERE " . $f_array[0] . " = " . $id . " ";
			$query .= "LIMIT 1";
			$result2 = $db->exe_query( $query, $db->connection );
		}
	}

	$crud = new Operations();

?>