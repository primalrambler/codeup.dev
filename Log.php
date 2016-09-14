<?php

class Log
{
	public $filename;
	public $datestamp;
	public $timestamp;
	public $handle;

	public function __construct ($prefix = 'log')
	{
		$this->datestamp = date('Y-m-d');
		$this->timestamp = date('H:i:s');
		$this->filename = "$prefix-{$this->datestamp}.log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($level, $message)
	{
		fwrite($this->handle, PHP_EOL ."{$this->datestamp} {$this->timestamp} $level $message");
	}

	public function logError($message)
	{
	    $this->logMessage('ERROR',$message);
	}

	public function logInfo($message)
	{
	    $this->logMessage('INFO',$message);
	}

	public function __destruct ()
	{
		fclose($this->handle);
	}

}