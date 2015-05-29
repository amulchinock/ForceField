<?php

class a {
	public $charset;
	public $coords;
	public $download;
	public $href;
	public $hreflang;
	public $media;
	public $name;
	public $rel;
	public $rev;
	public $shape;
	public $target;
	public $type;
	
	public function __construct($charset, $coords, $download, $href, $hreflang, $media, $name, $rel, $rev, $shape, $target, $type) {
		
		if ($charset == "") {
			$this->charset = "";
		}
		else {
			$this->charset = 'charset = "'.$charset.'" ';
		}
		
		
		if ($coords == "") {
			$this->coords = "";
		}
		else {
			$this->coords = 'coords = "'.$coords.'" ';
		}
		
		
		if ($download == "true") {
			$this->download = "download ";
		}
		elseif ($download == "false") {
			$this->download = "";
		}
		else {
			$this->download = "";
		}
		
		
		if ($href == "") {
			$this->href = 'href = "#" ';
		}
		else {
			$this->href = 'href = "'.$href.'" ';
		}
		
		
		if (Resources::ISOExists($hreflang)) {
			$this->hreflang = 'hreflang = "'.$hreflang.'" ';
		}
		else {
			$this->hreflang = "";
		}
		
		
		if ($media == "") {
			$this->media = "";
		}
		else {
			$this->media = 'media = "'.$media.'" ';
		}
		
		
		if ($name = "") {
			$this->name = "";
		}
		else {
			$this->name = 'name = "'.$name.'" ';	
		}
		
		
		if (Resources::A_Rel_AttributeExists($rel)) {
			$this->rel = 'rel = "'.$rel.'" ';
		}
		else {
			$this->rel = "";
		}
		
		
		if (Resources::A_Rev_AttributeExists($rev)) {
			$this->rev = 'rev = "'.$rev.'" ';
		}
		else {
			$this->rev = "";
		}
		
		
		if (Resources::A_Shape_AttributeExists($shape)) {
			$this->shape = 'shape = "'.$shape.'" ';
		}
		else {
			$this->shape = "";
		}
		
		
		if ($target == "") {
			$this->target = "";
		}
		else {
			$this->target = 'target = "'.$target.'" ';
		}
		
		
		if ($type == "") {
			$this->type = "";
		}
		else {
			$this->type = 'type = "'.$type.'" ';
		}
	}
	
}

?>