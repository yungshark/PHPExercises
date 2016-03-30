<?php

	class Log
	{
		private $filename;
		private $handle;
		public $subname


		// private function logMessage($level, $message){
		// 	$log_entry = PHP_EOL . date('Y-M-D H:I:S') . ' [' . $level . '] ' . $message;
		// 	fwrite($this->handle, $log_entry);
		// }
		public function logInfo($message){
			$this->logMessage("INFO", $message);
		}

		public function logError($message){
			$this->logMessage("ERROR", $message);
		}
		protected public function __destruct(){
			echo (this->handle);
		}
		public function __construct($name = "default", $subname = "default", $dir = "default-logs", $timezone = "America/Chicago"){
			date_default_timezone_set($timezone);
			$this->filename = $filename;
			$this->subname = $subname
			$filename = "{$name}-log-" . date("Y-m-d") . ".txt";
			if ($dir != false){
				if(is_dir($dir) === false)
					mkdir("{$dir}");
			}
			$this->handle = fopen($dir . "/" . $filename, "a+");
		} else {
			$this->handle = fopen($filename, "a+");
		}
		public function setFileName(){
			if (is_string($file)){
				$this->filename = $file;
			} else {
				echo 'Name of file expected to be a string!' . PHP_EOL;
				exit();
			}
		}
	}