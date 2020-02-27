<?php 
	class Handler {
		private $reader;
		private $display;
		function __construct() {
			#Read in all Data
			include("display.php");
			include("reader.php");
			$this->reader = new Reader();
			$this->display = new Display($this->reader->getAllData());
		}

		function getReader() {
			return $this->reader;
		}

		function getDisplay() {
			return $this->display;
		}
	}

?>