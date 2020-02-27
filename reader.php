<?php 
	class Reader {

		private $all = [];
		private $lines = [];

		public function __construct() {
			try {
				$this->readTextFile();
				$this->explodeDataIntoArrays();
			} catch (Exception $e) {
				echo "Exception ". $e->getCode();
			}
		}

		private function readTextFile() {
			$file = fopen("Bids.txt", "r");
			while($line = fgets($file)) {
				array_push($this->lines, $line);
			}
			fclose($file);
		}

		private function explodeDataIntoArrays() {
			for ($i=0; $i < count($this->lines); $i++)
				array_push($this->all, explode("	", $this->lines[$i]));
		}

		public function getAllData() {
			return $this->all;
		}
	}
?>