<?php
class Helper {
	
	public static function globalAttribute($url = NULL, $attribute = NULL) {
		return 'Further information on the <strong>'.$attribute.'</strong> attribute can be found at <a href="'.$url.'">W3Schools.com</a>';
	}
	
	public static function HTMLTags ($url = NULL, $tag = NULL) {
		return 'Further information on the <strong>'.$tag.'</strong> tag can be found at <a href="'.$url.'">W3Schools.com</a>';
	}
	
}

class Resources {
	protected static function ISOlang() {
		// Current ISO 3166-1 alpha-2 country codes, as accepted by HTML5.
		// Do not hook into this function directly.
		
		$iso_lang = array(
				"Abkhazian"						=>			"ab",
				"Afar"							=>			"aa",
				"Afrikaans"						=>			"af",
				"Albanian"						=>			"sq",
				"Amharic"						=>			"am",
				"Arabic"						=>			"ar",
				"Aragonese"						=>			"an",
				"Armenian"						=>			"hy",
				"Assamese"						=>			"as",
				"Aymara"						=>			"ay",
				"Azerbaijani"					=>			"az",
				"Bashkir"						=>			"ba",
				"Basque"						=>			"eu",
				"Bengali (Bangla)"				=>			"bn",
				"Bhutani"						=>			"dz",
				"Bihari"						=>			"bh",
				"Bislama"						=>			"bi",
				"Breton"						=>			"br",
				"Bulgarian"						=>			"bg",
				"Burmese"						=>			"my",
				"Byelorussian (Belarusian)"		=>			"be",
				"Cambodian"						=>			"km",
				"Catalan"						=>			"ca",
				"Cherokee"						=>			"",
				"Chewa"							=>			"",
				"Chinese"						=>			"zh",
				"Chinese (Simplified)"			=>			"zh-Hans",
				"Chinese (Traditional)"			=>			"zh-Hant",
				"Corsican"						=>			"co",
				"Croatian"						=>			"hr",
				"Czech"							=>			"cs",
				"Danish"						=>			"da",
				"Divehi"						=>			"",
				"Dutch"							=>			"nl",
				"Edo"							=>			"",
				"English"						=>			"en",
				"Esperanto"						=>			"eo",
				"Estonian"						=>			"et",
				"Faeroese"						=>			"fo",
				"Farsi"							=>			"fa",
				"Fiji"							=>			"fj",
				"Finnish"						=>			"fi",
				"Flemish"						=>			"",
				"French"						=>			"fr",
				"Frisian"						=>			"fy",
				"Fulfulde"						=>			"",
				"Galician"						=>			"gl",
				"Gaelic (Scottish)"				=>			"gd",
				"Gaelic (Manx)"					=>			"gv",
				"Georgian"						=>			"ka",
				"German"						=>			"de",
				"Greek"							=>			"el",
				"Greenlandic"					=>			"kl",
				"Guarani"						=>			"gn",
				"Gujarati"						=>			"gu",
				"Haitian Creole"				=>			"ht",
				"Hausa"							=>			"ha",
				"Hawaiian"						=>			"",
				"Hebrew"						=>			"he",
				"Hindi"							=>			"hi",
				"Hungarian"						=>			"hu",
				"Ibibio"						=>			"",
				"Icelandic"						=>			"is",
				"Ido"							=>			"io",
				"Igbo"							=>			"",
				"Indonesian"					=>			"id",
				"Interlingua"					=>			"ia",
				"Interlingue"					=>			"ie",
				"Inuktitut"						=>			"iu",
				"Inupiak"						=>			"ik",
				"Irish"							=>			"ga",
				"Italian"						=>			"it",
				"Japanese"						=>			"ja",
				"Javanese"						=>			"jv",
				"Kannada"						=>			"kn",
				"Kanuri"						=>			"",
				"Kashmiri"						=>			"ks",
				"Kazakh"						=>			"kk",
				"Kinyarwanda (Ruanda)"			=>			"rw",
				"Kirghiz"						=>			"ky",
				"Kirundi (Rundi)"				=>			"rn",
				"Konkani"						=>			"",
				"Korean"						=>			"ko",
				"Kurdish"						=>			"ku",
				"Laothian"						=>			"lo",
				"Latin"							=>			"la",
				"Latvian (Lettish)"				=>			"lv",
				"Limburgish ( Limburger)"		=>			"li",
				"Lingala"						=>			"ln",
				"Lithuanian"					=>			"lt",
				"Macedonian"					=>			"mk",
				"Malagasy"						=>			"mg",
				"Malay"							=>			"ms",
				"Malayalam"						=>			"ml",
				"Maltese"						=>			"mt",
				"Maori"							=>			"mi",
				"Marathi"						=>			"mr",
				"Moldavian"						=>			"mo",
				"Mongolian"						=>			"mn",
				"Nauru"							=>			"na",
				"Nepali"						=>			"ne",
				"Norwegian"						=>			"no",
				"Occitan"						=>			"oc",
				"Oriya"							=>			"or",
				"Oromo (Afaan Oromo)"			=>			"om",
				"Papiamentu"					=>			"",
				"Pashto (Pushto)"				=>			"ps",
				"Polish"						=>			"pl",
				"Portuguese"					=>			"pt",
				"Punjabi"						=>			"pa",
				"Quechua"						=>			"qu",
				"Rhaeto-Romance"				=>			"rm",
				"Romanian"						=>			"ro",
				"Russian"						=>			"ru",
				"Sami (Lappish)"				=>			"",
				"Samoan"						=>			"sm",
				"Sangro"						=>			"sg",
				"Sanskrit"						=>			"sa",
				"Serbian"						=>			"sr",
				"Serbo-Croatian"				=>			"sh",
				"Sesotho"						=>			"st",
				"Setswana"						=>			"tn",
				"Shona"							=>			"sn",
				"Sichuan Yi"					=>			"ii",
				"Sindhi"						=>			"sd",
				"Sinhalese"						=>			"si",
				"Siswati"						=>			"ss",
				"Slovak"						=>			"sk",
				"Slovenian"						=>			"sl",
				"Somali"						=>			"so",
				"Spanish"						=>			"es",
				"Sundanese"						=>			"su",
				"Swahili (Kiswahili)"			=>			"sw",
				"Swedish"						=>			"sv",
				"Syriac"						=>			"",
				"Tagalog"						=>			"tl",
				"Tajik"							=>			"tg",
				"Tamazight"						=>			"",
				"Tamil"							=>			"ta",
				"Tatar"							=>			"tt",
				"Telugu"						=>			"te",
				"Thai"							=>			"th",
				"Tibetan"						=>			"bo",
				"Tigrinya"						=>			"ti",
				"Tonga"							=>			"to",
				"Tsonga"						=>			"ts",
				"Turkish"						=>			"tr",
				"Turkmen"						=>			"tk",
				"Twi"							=>			"tw",
				"Uighur"						=>			"ug",
				"Ukrainian"						=>			"uk",
				"Urdu"							=>			"ur",
				"Uzbek"							=>			"uz",
				"Venda"							=>			"",
				"Vietnamese"					=>			"vi",
				"Volapük"						=>			"vo",
				"Wallon"						=>			"wa",
				"Welsh"							=>			"cy",
				"Wolof"							=>			"wo",
				"Xhosa"							=>			"xh",
				"Yi"							=>			"",
				"Yiddish"						=>			"yi",
				"Yoruba"						=>			"yo",
				"Zulu"							=>			"zu",
			);
			
		return $iso_lang;
	}
	
	public static function LanguageToISO($search = NULL) {
		//	Outputs the ISO 3166-1 alpha-2 country code for a specified language.
		//	For example: Resources::LanguageToISO("English") would output "en".
		
		if (!isset($search)) {
			return false;
		}
		else {
			$output = Resources::ISOlang();
			
			return $output[$search];
		}
	}
	
	public static function ISOToLanguage($search = NULL) {
		//	Outputs the language associated with an ISO 3166-1 alpha-2 country code.
		//	For example Resources::ISOToLanguage("en") would output "English".
		
		
		if (!isset($search)) {
			return false;
		}
		else {
			return array_search($search, Resources::ISOlang());
		}
	}
	
	public static function ISOExists($search = NULL) {
		//	Searches ISOlang() to see whether an ISO code exists or not.
		//	Returns TRUE or FALSE
		
		return in_array($search, Resources::ISOlang());
	}
	
	public static function DocTypes() {
		//	Stores current Doctypes as defined by W3C.
		
		$doctypes = array(
			'HTML5' 					=>		'<!DOCTYPE html>',
			'HTML 4.01 Strict'			=>		'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',
			'HTML 4.01 Transitional'	=>		'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
			'HTML 4.01 Frameset'		=>		'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">',
			'XHTML 1.0 Strict'			=>		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
			'XHTML 1.0 Transitional'	=>		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
			'XHTML 1.0 Frameset'		=>		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
			'XHTML 1.1'					=>		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
		);
		
		return $doctypes;
	}
	
	public static function DocTypeExists($type = NULL) {
		//	Checks to see if a Doctype name exists.
		//	Returns TRUE or FALSE
		
		if (!isset($type)) {
			return false;
		}
		else {
			return in_array($type, Resources::DocTypes());
		}
	}
	
	public static function DocTypeDeclare($type = NULL) {
		//	Declares the Doctype, based on input.
		//	For example: "HTML5" will declare "<!DOCTYPE html>"
		
		if (!isset($type)) {
			return false;
		}
		elseif (Resources::DocTypeExists($type)) {
			$DocType = Resources::DocTypes();
			return $DocType[$type];
		}
		else {
			return false;
		}
	}
	
	protected static function A_Rel_Attributes() {
		//	Accepted attributes for <a rel=""
		$attributes = array (
			"alternate",
			"author",
			"bookmark",
			"help",
			"license",
			"next",
			"nofollow",
			"noreferrer",
			"prefetch",
			"prev",
			"search",
			"tag"
		);
		
		return $attributes;
	}
	
	public static function A_Rel_AttributeExists($atr = NULL) {
		if (!isset($atr)) {
			return false;
		}
		else {
			return in_array($atr,Resources::A_Rel_Attributes());
		}
	}
	
	protected static function A_Rev_Attributes() {
		// Accepted attributes for <a rev=""
		
		$attributes = array(
			"alternate",
			"stylesheet",
			"start",
			"next",
			"prev",
			"contents",
			"index",
			"glossary",
			"copyright",
			"chapter",
			"section",
			"subsection",
			"appendix",
			"help",
			"bookmark",
			"nofollow",
			"licence",
			"tag",
			"friend"
		);
		
		return $attributes;
	}
	
	public static function A_Rev_AttributeExists($atr = NULL) {
		if (!isset($atr)) {
			return false;
		}
		else {
			return in_array($atr,Resources::A_Rev_Attributes());
		}
	}
	
	protected static function A_Shape_Attributes() {
		$shape = array(
		"default",
		"rect",
		"circle",
		"poly"
		);
		
		return $shape;
	}
	
	public static function A_Shape_AttributeExists($shape = NULL) {
		if(!isset($shape)) {
			return false;
		}
		else {
			return in_array($shape, Resources::A_Shape_Attributes());
		}
	}
	
}


?>