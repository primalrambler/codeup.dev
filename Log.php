<?php

class Log
{
	private $filename;
	private $datestamp;
	private $timestamp;
	private $handle;
	private $logDirectory;


	public function __construct($prefix = 'log')
	{
		$this->logDirectory = __DIR__ . '/public/logs/';
		$this->setDateStamp();
		$this->setTimeStamp();
		$this->setFilename($prefix);
		$this->setHandle();
	}


	// public function __construct ($prefix = 'log')
	// {
	// 	$this->datestamp = date('Y-m-d');
	// 	$this->timestamp = date('H:i:s');
	// 	$this->filename = "$prefix-{$this->datestamp}.log";
	// 	$this->handle = fopen($this->$logDirectory.$this->filename, 'a');
	// }

//----------- Setters

	protected function setDateStamp ()
	{
		$this->datestamp = date('Y-m-d');
	}

	protected function setTimeStamp ()
	{
		$this->timestamp = date('H:i:s');
	}

	protected function setFilename($prefix)
	{
		$this->filename = "$prefix-".$this->getDateStamp().".log";
	}

	protected function setHandle()
	{
		$this->handle = fopen($this->getLogDirectory().$this->getFilename(), 'a');
	}

//----------- Getters


	public function getDateStamp()
	{
		return $this->datestamp;
	}
	public function getTimeStamp()
	{
		return $this->timestamp;
	}
	public function getLogDirectory()
	{
		return $this->logDirectory;
	}
	public function getFilename()
	{
		return $this->filename;
	}
	public function getHandle()
	{
		return $this->handle;
	}


//----------- Operational

	public function logMessage($level, $message)
	{
		fwrite($this->getHandle(), PHP_EOL .$this->getDateStamp()." ".$this->getTimeStamp()." $level $message");
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
		fclose($this->getHandle());
	}

}