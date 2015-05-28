class FormHTML {
	
	/*
	 * Converts array values into <option></option> fields.
	 * Do not directly hook into this function! Go via select() 
	 */
	 
	private static function select_options($options = NULL) {
		if (isset($options)) {
			$output = "";
			
			foreach ($options as $option) {
				if ($option[1] == "true") {
					$disabled = "disabled ";
				}
				else {
					$disabled = "";
				}
				
				if ($option[2] !== "") {
					$label = 'label="'.$option[2].'" ';
				}
				else {
					$label = "";
				}
				
				if ($option[3] == "true") {
					$selected = "selected";
				}
				else {
					$selected = "";
				}
				
				$output .= '<option '.$label.'value="'.$option[4].'" '.$disabled.$selected.'>'.$option[0].'</option>';
			}
			
			return $output;
		}
	}
		
	/*
	 * Creates a <select></select> element.
	 * 
	 * $options					-	Options available for the user to choose, stored as an array.
	 * $field_name (optional)	-	The name you wish to assign to the element in the DOM.
	 * $field_id (optional)		-	The ID you wish to assign to the element in the DOM.
	 * 
	 * Passes $options to select_options() for parsing.
	 * 
	 */
	 
	public static function select($options = NULL, $field_name = NULL, $field_id = NULL, $auto_focus = NULL, $disabled = NULL, $form = NULL, $multiple = NULL, $required = NULL, $size = NULL) {
		$pre = '<select';
		$name = ' name="'.$field_name.'"';
		$id = ' id="'.$field_id.'"';
		$end = '>';
		$post = "</select>";
		
		if(isset($options)) {
			if(isset($field_name) && isset($field_id)) {
				return $pre.$name.$id.$end.FormHTML::select_options($options).$post;
			}
			elseif (!isset($field_name) && isset($field_id)) {
				return $pre.$id.$end.FormHTML::select_options($options).$post;
			}
			elseif (isset($field_name) && !isset($field_id)) {
				return $pre.$name.$end.FormHTML::select_options($options).$post;
			}
			elseif (!isset($field_name) && !isset($field_id)) {
				return $pre.$end.FormHTML::select_options($options).$post;
			}
			else {
				return "Error. Please check code.";
			}
		}
		
	}
<?php
	/*
	 * Creates a textbox type <input> element.
	 * 
	 * $field_name (optional)	-	The name you wish to assign to the element in the DOM.
	 * $field_id (optional)		-	The ID you wish to assign to the element in the DOM.
	 * $placeholder (optional)	-	The placholder text you wish to assign to the element.
	 */
	
	public static function textbox($field_name = NULL, $field_id = NULL, $placeholder = NULL) {
		$pre = '<input type="text"';
		$name = ' name="'.$field_name.'"';
		$id = ' id="'.$field_id.'"';
		$ph = ' placeholder="'.$placeholder.'"';
		$end = '>';
		$post = "";
		
		if(isset($field_name) && isset($field_id)) {
			return $pre.$name.$id.$ph.$end;
		}
		elseif (!isset($field_name) && isset($field_id)) {
			return $pre.$id.$ph.$end;
		}
		elseif (isset($field_name) && !isset($field_id)) {
			return $pre.$name.$ph.$end;
		}
		elseif (!isset($field_name) && !isset($field_id)) {
			return $pre.$ph.$end;
		}
		else {
			return "Error. Please check code.";
		}
	}
	
}
?>