<?php
	
	interface iFEBuild {
		public function __construct();
		public static function Run($json);
		public static function Content($context);
	}
	
	interface iFEBuild_Moo {
		public static function Log();
		public static function Debug($crazy_stuff);
		public static function SandBox($sand);
	}
	
	interface iFEBuild_Library {
		public static function Less($path);
		public static function CoffeeScript($path);
		public static function Concat($files, $path);
		public static function Minify($file, $path);
		public static function Markdown($path, $file);
		public static function StylesheetFile($files, $path, $concat = false, $minify = false);
		public static function JavascriptFile($files, $path, $concat = false, $minify = false);
	}
	
?>