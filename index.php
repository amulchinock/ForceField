<?php
require_once "helper_classes.php";
require_once "html_tag_attributes.php";

/*
*	ForceField - A simple PHP framework for quickly and efficiently generating HTML elements and attributes in PHP.
*	Author: Alex Mulchinock
*	www.github.com/amulchinock
*/

class GlobalAttribute {
	/* Can be used on any HTML element. As per W3C documentation. */
	
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
	
	public static function dropzone($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "copy" or $value == "move" or $value == "link") {
			return 'dropzone = "'.$value.'" ';
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_dropzone.asp","dropzone");
		}
		else {
			return false;
		}
	}
	
	public static function hidden($value = NULL) {
		if (!isset($value)) {
			return 'hidden ';
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_hidden.asp","hidden");
		}
		else {
			return false;
		}
	}
	
	public static function id($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_id.asp","id");
		}
		else {
			return 'id = "'.$value.'" ';
		}
	}
	
	public static function lang($value) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_lang.asp","lang");
		}
		else {
			if (Resources::ISOExists($value)) {
				return 'lang="'.$value.'" ';
			}
			else {
				return false;
			}
		}
	}
	
	public static function spellcheck($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value = "true" or $value = "false") {
			return 'spellcheck = "'.$value.'" ';
		}
		elseif ($value = "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_spellcheck.asp", "spellcheck");
		}
		else {
			return false;
		}
	}
	
	public static function style($value) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_style.asp", "style");
		}
		else {
			return 'style = "'.$value.'" ';
		}
	}
	
	public static function tabindex($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_tabindex.asp", "tabindex");
		}
		elseif (is_numeric($value)) {
			return 'tabindex = "'.$value.'" ';
		}
		else {
			return false;
		}
	}
	
	public static function title($value = NULL) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_title.asp", "title");
		}
		else {
			return 'title = "'.$value.'" ';
		}
	}
	
	public static function translate($value) {
		if (!isset($value)) {
			return false;
		}
		elseif ($value == "true" or $value == "false") {
			switch($value) {
				case "true":
				return 'translate = "yes" ';
				break;
				
				case "false":
				return 'translate = "no" ';
				break;
			}
		}
		elseif ($value == "yes" or $value == "no") {
			return 'translate = "'.$value.'" ';
		}
		elseif ($value == "help") {
			return Helper::globalAttribute("http://www.w3schools.com/tags/att_global_translate.asp","title");
		}
		else {
			return false;
		}
	}
	
}

class HTMLTags {
	/*	HTML Tags 	*/
	
	public static function comment($comment) {
		if (!isset($comment)) {
			return false;
		}
		elseif ($comment == "help") {
			return Helper::HTMLTags("http://www.w3schools.com/tags/tag_comment.asp", "<!-- -->");
		}
		else {
			$pre = "<!-- ";
			$post = " -->";
			
			return $pre.$comment.$post;
		}
	}
	
	public static function doctype($value = NULL) {
		if (!isset($value)) {
			return Resources::DocTypeDeclare("HTML5");
		}
		else {
			return Resources::DocTypeDeclare($value);
		}
	}
	
	public static function hyperlink($properties = NULL) {
		if(!isset($properties) or !is_array($properties)) {
			return false;
		}
		$hyperlink = new a($properties["charset"], $properties["coords"], $properties["download"], $properties["href"], $properties["hreflang"], $properties["media"], $properties["name"], $properties["rel"], $properties["rev"], $properties["shape"], $properties["target"], $properties["type"], $properties["text"]);
		
		return "<a ".$hyperlink->charset.$hyperlink->coords.$hyperlink->download.$hyperlink->href.$hyperlink->hreflang.$hyperlink->media.$hyperlink->name.$hyperlink->rel.$hyperlink->rev.$hyperlink->shape.$hyperlink->target.$hyperlink->type.">".$hyperlink->text."</a>";
	}
	
	
}

?>