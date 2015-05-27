<?php
require_once "helper_classes.php";

/*
*	ForceField - A simple PHP class for generating form fields and components.
*	Author: Alex Mulchinock
*	www.github.com/amulchinock
*/
class GlobalAttribute {
	
	/* Can be used on any HTML element. As per W3C documentation. */
	
	/*
	$accessKey;
	$class;
	$contentEditable;
	$contextMenu;
	$dataName;
	$dataValue;
	$dir;
	$draggable;
	$dropZone;
	$hidden;
	$id;
	$lang;
	$spellCheck;
	$style;
	$tabIndex;
	$title;
	$translate;
	*/
	
	public static function accessKey($key = NULL) {
		if (!isset($key)) {
			return false;
		}
		elseif ($key == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_accesskey.asp", "accesskey");
		}
		else {
			return 'accesskey = "'.$key.'" ';
		}
	}
	public static function cssClass($class = NULL) {
		if (!isset($class)) {
			return false;
		}
		elseif ($class == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_class.asp", "class");
		}
		else {
			return 'class = "'.$class.'" ';
		}
	}
	
	public static function contentEditable($i = NULL) {
		if (!isset($i)) {
			return false;
		}
		elseif ($i == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_contenteditable.asp", "contenteditable");
		}
		elseif ($i == "true") {
			return 'contenteditable = "true" ';
		}
		elseif ($i == "false") {
			return 'contenteditable = "false" ';
		}
		else {
			return false;
		}
	}
	
	public static function contextMenu($i = NULL) {
		if (!isset($i)) {
			return false;
		}
		elseif ($i == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_contextmenu.asp", "contextmenu");
		}
		else {
			return 'contextmenu = "'.$i.'" ';
		}
	}
	
	public static function data($name = NULL, $value = NULL) {
		if (!isset($data) && !isset($value)) {
			return false;
		}
		elseif ($name == "help" && !isset($value)) {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_data.asp","data-*");
		}
		else {
			return 'data-'.$name.' = "'.$value.'" ';
		}
	}
	
	public static function dir($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "ltr" or $value == "rtl" or $value == "auto") {
			return 'dir = "'.$value.'" ';
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_dir.asp","dir");
		}
		else {
			return false;
		}
	}
	
	public static function draggable($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "true" or $value == "false" or $value == "auto") {
			return 'draggable = "'.$value.'" ';
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_draggable.asp","draggable");
		}
		else {
			return false;
		}
	}
	
}


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